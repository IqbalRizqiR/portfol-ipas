<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $image = Image::all();

        return view('page.admin.image.index', compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $fileName = time().'.'.$request->path->extension();
        $data['path'] = $request->path->storeAs('uploads/image', $fileName);
        $create = Image::create($data);

        if (!$create) {
            return redirect()->back();
        }
        return redirect()->route('image.index');
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
        $image = Image::where('id', $id)->first();

        return view('page.admin.image.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image = Image::where('id', $id)->first();
        $fileName = time().'.'.$request->path->extension();
        $update = $image->update([
            'path' => $request->path->storeAs('uploads/anggota', $fileName),
        ]);

        if (!$update) {
            return redirect()->back();
        }
        return redirect()->route('image.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = Image::where('id', $id)->first();
        $delete = $image->delete();

        if (!$delete) {
            return redirect()->back();
        }
        return redirect()->route('image.index');
    }
}
