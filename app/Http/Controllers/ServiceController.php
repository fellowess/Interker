<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function AdminService() {
        $services = Service::all();

        return view('admin.service.index', compact('services'));
    }

    public function AdminAddService() {
        return view('admin.service.create');
    }

    public function AdminStoreService(Request $request){
        Service::insert([
            'logo_hu' => $request->logo_hu,
            'title_hu' => $request->title_hu,
            'title_en' => $request->title_en,
            'title_fr' => $request->title_fr,
            'title_it' => $request->title_it,
            'short_desc_hu' => $request->short_desc_hu,
            'short_desc_en' => $request->short_desc_en,
            'short_desc_fr' => $request->short_desc_fr,
            'short_desc_it' => $request->short_desc_it,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.service')->with('success', 'Service Inserted Successful');
    }
}
