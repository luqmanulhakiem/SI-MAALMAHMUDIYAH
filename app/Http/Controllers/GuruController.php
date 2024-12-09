<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuruPostRequest;
use App\Models\Guru;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Guru::paginate(30);
        return view('dashboard.guru.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuruPostRequest $request)
    {
        $data = $request->validated();

        $filename = null;

        if ($request->hasFile('foto')) {
            $filename = 'CDN-' . Str::random(10) . '.webp';
            $data['foto']->storeAs('guru/', $filename);
        }

        Guru::create([
            'nip' => $data['nip'],
            'nik' => $data['nik'],
            'nama' => $data['nama'],
            'ttl' => $data['ttl'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'alamat' => $data['alamat'],
            'foto' => $filename,
        ]);

        return redirect()->route('db.guru');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Guru::findorfail($id);

        return view('dashboard.guru.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GuruPostRequest $request, string $id)
    {
        $data = $request->validated();
        $guru = Guru::findorfail($id);

        if ($guru) {
            $guru->update([
                'nip' => $data['nip'],
                'nik' => $data['nik'],
                'nama' => $data['nama'],
                'ttl' => $data['ttl'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'alamat' => $data['alamat'],
            ]);
        }

        if (isset($data['foto'])) {
            if ($guru->foto != null) {
                $oldFoto = public_path('storage/guru/' . $guru->foto);
                if (file_exists($oldFoto)) {
                    File::delete($oldFoto);
                }
                $data['foto']->storeAs('guru/', $guru->foto);
                return redirect()->route('db.guru');
            }
            $filename = 'CDN-' . Str::random(10) . '.webp';
            $data['foto']->storeAs('guru/', $filename);
            return redirect()->route('db.guru');
        }

        return redirect()->route('db.guru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Guru::findorfail($id);
        $data->delete();

        return redirect()->route('db.guru');
    }
}
