<?php

namespace App\Http\Controllers;

use App\Http\Requests\GaleriRequest;
use App\Http\Requests\GaleriRequestUpdate;
use App\Models\Ekstrakurikuler;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class EkstrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Ekstrakurikuler::paginate(30);
        return view('dashboard.ekstrakurikuler.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.ekstrakurikuler.create');
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
            $data['foto']->storeAs('ekstrakurikuler/', $filename);
        }

        Ekstrakurikuler::create([
            'nama' => $data['nama'],
            'foto' => $filename,
        ]);

        return redirect()->route('db.ekstrakurikuler');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Ekstrakurikuler::findorfail($id);

        return view('dashboard.ekstrakurikuler.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GaleriRequestUpdate $request, string $id)
    {
        $data = $request->validated();
        $galeri = Ekstrakurikuler::findorfail($id);

        if ($galeri) {
            $galeri->update([
                'nama' => $data['nama'],
            ]);
        }

        if (isset($data['foto'])) {
            if ($galeri->foto != null) {
                $oldFoto = public_path('storage/ekstrakurikuler/' . $galeri->foto);
                if (file_exists($oldFoto)) {
                    File::delete($oldFoto);
                }
                $data['foto']->storeAs('ekstrakurikuler/', $galeri->foto);
                return redirect()->route('db.ekstrakurikuler');
            }
            $filename = 'CDN-' . Str::random(10) . '.webp';
            $data['foto']->storeAs('ekstrakurikuler/', $filename);
            return redirect()->route('db.ekstrakurikuler');
        }

        return redirect()->route('db.ekstrakurikuler');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Ekstrakurikuler::findorfail($id);
        $data->delete();

        return redirect()->route('db.ekstrakurikuler');
    }
}
