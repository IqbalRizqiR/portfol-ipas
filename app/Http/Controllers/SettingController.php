<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::first();
        return view('page.admin.setting.edit', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setting = Setting::where('id', $id)->first();
        if (!empty($request->file('logo_kelompok'))) {
            $fileName = time().'.'.$request->logo_kelompok->extension();
            $logo_kelompok = $request->logo_kelompok->storeAs('uploads/setting', $fileName);
        } else {
            $logo_kelompok = $request->file('logo_kelompok');
        }
        if (!empty($request->file('jadwalkegiatan'))) {
            $fileName = time().'.'.$request->jadwalkegiatan->extension();
            $jadwalkegiatan = $request->jadwalKegiatan->storeAs('uploads/setting', $fileName);
        } else {
            $jadwalkegiatan = $request->file('jadwalkegiatan');
        }

        $update = $setting->update([
            'nama_kelompok' => $request->nama_kelompok,
            'logo_kelompok' => $logo_kelompok,
            'short_aboutus' => $request->short_aboutus,
            'short_aboutproject' => $request->short_aboutproject,
            'text_aboutus' => $request->text_aboutus,
            'text_aboutproject' => $request->text_aboutproject,
            'text_landasanteori' => $request->text_landasanteori,
            'text_alat' => $request->text_alat,
            'text_bahan' => $request->text_bahan,
            'text_hasil' => $request->text_hasil,
            'text_kesimpulan' => $request->text_kesimpulan,
            'jadwalkegiatan' => $jadwalkegiatan,
        ]);

        if ($update) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
