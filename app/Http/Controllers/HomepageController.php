<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Image;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $image = Image::all();
        // dd(count($image));
        $anggota = Anggota::all();
        return view('page.user.homepage', compact('setting', 'image', 'anggota'));
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('page.user.aboutus', compact('setting'));
    }

    public function individual($id)
    {
        $anggota = Anggota::where('id', $id)->first();
        return view('page.user.individual', compact('anggota'));
    }

    public function project()
    {
        $setting = Setting::first();
        $image = Image::all();
        return view('page.user.project', compact('setting', 'image'));
    }
}
