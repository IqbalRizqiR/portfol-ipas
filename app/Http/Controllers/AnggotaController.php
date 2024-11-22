<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::all();

        return view('page.admin.anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.admin.anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $fileName = time().'.'.$request->photo->extension();
        $data['photo'] = $request->photo->storeAs('uploads/anggota', $fileName);
        $create = Anggota::create($data);

        if (!$create) {
            return redirect()->back();
        }
        return redirect()->route('anggota.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anggota = Anggota::where('id', $id)->first();

        return view('page.admin.anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggota = Anggota::where('id', $id)->first();

        return view('page.admin.anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anggota = Anggota::where('id', $id)->first();
        $fileName = time().'.'.$request->file('photo')->extension();
        $update = $anggota->update([
            'name' => $request->name,
            'job' => $request->job,
            'role' => $request->role,
            'class' => $request->class,
            'age' => $request->age,
            'descript' => $request->descript,
            'motto' => $request->motto,
            'photo' => $request->photo->storeAs('uploads/anggota', $fileName),
        ]);

        if (!$update) {
            return redirect()->back();
        }
        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anggota = Anggota::where('id', $id)->first();
        $delete = $anggota->delete();

        if (!$delete) {
            return redirect()->back();
        }
        return redirect()->route('anggota.index');
    }
}
