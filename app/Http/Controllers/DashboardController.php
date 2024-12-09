<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $siswa = Siswa::count();
        $guru = Guru::count();

        return view('dashboard.dashboard.index', compact(['siswa', 'guru']));
    }
}
