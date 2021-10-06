<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Multipic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Image;

class BrandController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function AllBrand()
    {
        $brands = Brand::latest()->paginate(5);

//        $categories = DB::table('categories')->latest()->paginate(5);
        /*$categories = DB::table('categories')
            ->join('users', 'categories.user_id', 'users.id')
            ->select('categories.*', 'users.name')
            ->latest()->paginate(5);*/
        return view('admin.brand.index', compact('brands'));
    }

    public function AddBrand(Request $request)
    {
        $validated = $request->validate([
            'brand_name' => 'required|unique:brands|min:3',
            "brand_image" => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
            [
                'brand_name.required' => 'Please Input Brand Name',
                'brand_image.min' => 'Brand Longer then 4 Characters',
            ]
        );

        $brand_image = $request->file('brand_image');

//        $name_gen = hexdec(uniqid());
//        $image_ext = strtolower($brand_image->getClientOriginalExtension());
//        $img_name = $name_gen.'.'.$image_ext;
//        $up_location = 'image/brand/';
//        $last_img = $up_location.$img_name;
//        $brand_image->move($up_location, $img_name);

        $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
        Image::make($brand_image)->resize(300, 200)->save('image/brand/'.$name_gen);

        $last_img = 'image/brand/'.$name_gen;

        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Brand Inserted Successful',
            'alert-type' => 'success',
        );

        return Redirect()->back()->with($notification);

    }

    public function Edit($id) {
        $brands = Brand::find($id);
//        $brands = DB::table('brands')->where('id', $id)->first();
        return view('admin.brand.edit', compact('brands'));
    }

    public function Update(Request $request, $id) {
//        $update = Category::find($id)->update([
//                'category_name' => $request->category_name,
//                'user_id' => Auth::user()->id,
//            ]);

        $validated = $request->validate([
            'brand_name' => 'required|min:4',
        ],
            [
                'brand_name.required' => 'Please Input Brand Name',
                'brand_image.min' => 'Brand Longer then 4 Characters',
            ]
        );

        $old_img = $request->old_image;


        $brand_image = $request->file('brand_image');

        if($brand_image){
            $name_gen = hexdec(uniqid());
            $image_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$image_ext;
            $up_location = 'image/brand/';
            $last_img = $up_location.$img_name;
            $brand_image->move($up_location, $img_name);

            unlink($old_img);

            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'brand_image' => $last_img,
                'created_at' => Carbon::now()
            ]);

        }
        else {
            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'created_at' => Carbon::now()
            ]);

        }
        return Redirect()->back()->with('success', 'Brand Updated Successful');
    }

    public function Delete($id) {
        $image = Brand::find($id);
        $old_img = $image->brand_image;

        unlink($old_img);

        Brand::find($id)->delete();

        return Redirect()->back()->with('success', 'Brand Delete Successful');
    }

    public function MultiPic() {
        $images = Multipic::all();
        return view('admin.multipic.index', compact('images'));
    }

    public function StoreImg(Request $request)
    {
        $image = $request->file('image');

        foreach ($image as $multi) {
            $name_gen = hexdec(uniqid()).'.'.$multi->getClientOriginalExtension();
            Image::make($multi)->save('image/multi/'.$name_gen);

            $last_img = 'image/multi/'.$name_gen;

            Multipic::insert([
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
        }

        return Redirect()->back()->with('success', 'Multiple Images Added Successful');

    }

    public function Logout() {
        Auth::logout();
        return Redirect()->route('login')->with('success', 'User Logged Out');
    }
}
