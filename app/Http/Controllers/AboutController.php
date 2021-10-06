<?php

namespace App\Http\Controllers;

use App\Models\HomeAbout;
use App\Models\Multipic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function HomeAbout() {
        $homeAbout = HomeAbout::latest()->get();

        return view('admin.home.index', compact('homeAbout'));
    }

    public function AddAbout() {
        return view('admin.home.create');
    }

    public function StoreAbout(Request $request) {
        HomeAbout::insert([
            'title' => $request->title,
            'short_desc' => $request->short_desc,
            'long_desc' => $request->long_desc,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.about')->with('success', 'About Inserted Successful');

    }

    public function EditAbout($id) {
        $homeAbout = HomeAbout::find($id);

        return view('admin.home.edit', compact('homeAbout'));
    }

    public function UpdateAbout(Request $request, $id) {
        $update = HomeAbout::find($id)->update([
            'title' => $request->title,
            'short_desc' => $request->short_desc,
            'long_desc' => $request->long_desc,
        ]);

        return Redirect()->route('home.about')->with('success', 'About Updated Successful');
    }

    public function DeleteAbout($id) {
        $delete = HomeAbout::find($id)->delete();

        return Redirect()->back()->with('success', 'About Deleted Successful');
    }

    public function Portfolio(){
        $images = Multipic::all();

        return view('pages.portfolio', compact('images'));
    }
}
