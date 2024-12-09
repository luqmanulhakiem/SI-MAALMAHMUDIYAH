<?php

namespace App\Http\Controllers;

use App\Http\Requests\SertifikasiGuruRequest;
use App\Http\Requests\SertifikasiGuruRequestUpdate;
use App\Models\SertifikasiGuru;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SertifikasiGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SertifikasiGuru::paginate(30);
        return view('dashboard.sertifikasi-guru.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.sertifikasi-guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SertifikasiGuruRequest $request)
    {
        $data = $request->validated();

        $filename = null;

        if ($request->hasFile('foto')) {
            $filename = 'CDN-' . Str::random(10) . '.webp';
            $data['foto']->storeAs('sertifikat/guru/', $filename);
        }

        SertifikasiGuru::create([
            'nama' => $data['nama'],
            'deskripsi' => $data['deskripsi'],
            'foto' => $filename,
        ]);

        return redirect()->route('db.sertifikasi.guru');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = SertifikasiGuru::findorfail($id);

        return view('dashboard.sertifikasi-guru.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SertifikasiGuruRequestUpdate $request, string $id)
    {
        $data = $request->validated();
        $galeri = SertifikasiGuru::findorfail($id);

        if ($galeri) {
            $galeri->update([
                'nama' => $data['nama'],
                'deskripsi' => $data['deskripsi'],
            ]);
        }

        if (isset($data['foto'])) {
            if ($galeri->foto != null) {
                $oldFoto = public_path('storage/sertifikat/guru/' . $galeri->foto);
                if (file_exists($oldFoto)) {
                    File::delete($oldFoto);
                }
                $data['foto']->storeAs('sertifikat/guru/', $galeri->foto);
                return redirect()->route('db.sertifikasi.guru');
            }
            $filename = 'CDN-' . Str::random(10) . '.webp';
            $data['foto']->storeAs('sertifikat/guru/', $filename);
            return redirect()->route('db.sertifikasi.guru');
        }

        return redirect()->route('db.sertifikasi.guru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = SertifikasiGuru::findorfail($id);
        $data->delete();

        return redirect()->route('db.sertifikasi.guru');
    }
}
