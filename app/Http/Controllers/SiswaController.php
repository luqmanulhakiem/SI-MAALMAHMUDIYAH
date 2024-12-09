<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaPostRequest;
use App\Http\Requests\SiswaUpdateRequest;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::paginate(30);
        return view('dashboard.siswa.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SiswaPostRequest $request)
    {
        $data = $request->validated();

        Siswa::create($data);

        return redirect()->route('db.siswa');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Siswa::findorfail($id);

        return view('dashboard.siswa.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SiswaPostRequest $request, string $id)
    {
        $data = $request->validated();
        $siswa = Siswa::findorfail($id);

        if ($siswa) {
            $siswa->update($data);
        }

        return redirect()->route('db.siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Siswa::findorfail($id);
        $data->delete();

        return redirect()->route('db.siswa');
    }
}
