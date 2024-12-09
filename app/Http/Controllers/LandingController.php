<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\SertifikasiGuru;
use App\Models\Siswa;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        $ekstrakurikuler = Ekstrakurikuler::latest()->take(3)->get();
        $galeri = Galeri::latest()->take(4)->get();

        $countSiswa = Siswa::count();
        $countGuru = Guru::count();
        $countSertifikasiGuru = SertifikasiGuru::count();

        return view('landing.home.index', compact(['ekstrakurikuler', 'galeri', 'countSiswa', 'countGuru', 'countSertifikasiGuru']));
    }

    public function contact()
    {
        return view('landing.kontak.index');
    }

    public function tentang()
    {
        return view('landing.tentang.index');
    }
    public function pengajar()
    {
        $guru = Guru::paginate(16);
        return view('landing.pengajar.index', compact('guru'));
    }
    public function galeri()
    {
        $galeri = Galeri::paginate(16);
        return view('landing.galeri.index', compact('galeri'));
    }
    public function sertifikasiguru()
    {
        $data = SertifikasiGuru::paginate(16);
        return view('landing.sertifikasi.index', compact('data'));
    }
}
