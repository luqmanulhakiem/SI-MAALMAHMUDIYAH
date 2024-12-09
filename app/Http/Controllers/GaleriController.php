<?php

namespace App\Http\Controllers;

use App\Http\Requests\GaleriRequest;
use App\Http\Requests\GaleriRequestUpdate;
use App\Models\Galeri;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Galeri::paginate(30);
        return view('dashboard.galeri.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GaleriRequest $request)
    {
        $data = $request->validated();

        $filename = null;

        if ($request->hasFile('foto')) {
            $filename = 'CDN-' . Str::random(10) . '.webp';
            $data['foto']->storeAs('galeri/', $filename);
        }

        Galeri::create([
            'nama' => $data['nama'],
            'foto' => $filename,
        ]);

        return redirect()->route('db.galeri');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Galeri::findorfail($id);

        return view('dashboard.galeri.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GaleriRequestUpdate $request, string $id)
    {
        $data = $request->validated();
        $galeri = Galeri::findorfail($id);

        if ($galeri) {
            $galeri->update([
                'nama' => $data['nama'],
            ]);
        }

        if (isset($data['foto'])) {
            if ($galeri->foto != null) {
                $oldFoto = public_path('storage/galeri/' . $galeri->foto);
                if (file_exists($oldFoto)) {
                    File::delete($oldFoto);
                }
                $data['foto']->storeAs('galeri/', $galeri->foto);
                return redirect()->route('db.galeri');
            }
            $filename = 'CDN-' . Str::random(10) . '.webp';
            $data['foto']->storeAs('galeri/', $filename);
            return redirect()->route('db.galeri');
        }

        return redirect()->route('db.galeri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Galeri::findorfail($id);
        $data->delete();

        return redirect()->route('db.galeri');
    }
}
