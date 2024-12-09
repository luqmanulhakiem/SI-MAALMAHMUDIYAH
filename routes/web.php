<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SertifikasiGuruController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

// Halaman Login
Route::middleware(['middleware' => 'guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/login-request', [AuthController::class, 'login'])->name('login.request');
});

// Halaman Dashboard
Route::middleware(['middleware' => 'auth'])->group(function () {
    Route::get('/logout-request', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Controller Siswa
        Route::controller(SiswaController::class)->group(function () {
            Route::get('siswa', 'index')->name('db.siswa');
            Route::prefix('siswa')->group(function () {
                Route::get('create', 'create')->name('db.siswa.create');
                Route::post('store', 'store')->name('db.siswa.store');
                Route::get('edit/{id}', 'edit')->name('db.siswa.edit');
                Route::post('update/{id}', 'update')->name('db.siswa.update');
                Route::get('destroy/{id}', 'destroy')->name('db.siswa.destroy');
            });
        });
        // End of Controller Siswa

        // Controller Guru
        Route::controller(GuruController::class)->group(function () {
            Route::get('guru', 'index')->name('db.guru');
            Route::prefix('guru')->group(function () {
                Route::get('create', 'create')->name('db.guru.create');
                Route::post('store', 'store')->name('db.guru.store');
                Route::get('edit/{id}', 'edit')->name('db.guru.edit');
                Route::post('update/{id}', 'update')->name('db.guru.update');
                Route::get('destroy/{id}', 'destroy')->name('db.guru.destroy');
            });
        });
        // End of Controller Guru

        // Controller Galeri
        Route::controller(GaleriController::class)->group(function () {
            Route::get('galeri', 'index')->name('db.galeri');
            Route::prefix('galeri')->group(function () {
                Route::get('create', 'create')->name('db.galeri.create');
                Route::post('store', 'store')->name('db.galeri.store');
                Route::get('edit/{id}', 'edit')->name('db.galeri.edit');
                Route::post('update/{id}', 'update')->name('db.galeri.update');
                Route::get('destroy/{id}', 'destroy')->name('db.galeri.destroy');
            });
        });
        // End of Controller Galeri

        // Controller Ekstrakurikuler
        Route::controller(EkstrakurikulerController::class)->group(function () {
            Route::get('ekstrakurikuler', 'index')->name('db.ekstrakurikuler');
            Route::prefix('ekstrakurikuler')->group(function () {
                Route::get('create', 'create')->name('db.ekstrakurikuler.create');
                Route::post('store', 'store')->name('db.ekstrakurikuler.store');
                Route::get('edit/{id}', 'edit')->name('db.ekstrakurikuler.edit');
                Route::post('update/{id}', 'update')->name('db.ekstrakurikuler.update');
                Route::get('destroy/{id}', 'destroy')->name('db.ekstrakurikuler.destroy');
            });
        });
        // End of Controller Ekstrakurikuler

        // Controller Sertifikasi Guru
        Route::controller(SertifikasiGuruController::class)->group(function () {
            Route::prefix('sertifikasi')->group(function () {
                Route::get('guru', 'index')->name('db.sertifikasi.guru');
                Route::prefix('guru')->group(function () {
                    Route::get('create', 'create')->name('db.sertifikasi.guru.create');
                    Route::post('store', 'store')->name('db.sertifikasi.guru.store');
                    Route::get('edit/{id}', 'edit')->name('db.sertifikasi.guru.edit');
                    Route::post('update/{id}', 'update')->name('db.sertifikasi.guru.update');
                    Route::get('destroy/{id}', 'destroy')->name('db.sertifikasi.guru.destroy');
                });
            });
        });
        // End of Controller Sertifikasi Guru
    });
});

// Halaman Landing (Home)
// Route::get('/', function () {
//     return view('landing.home.index');
// })->name('home');

Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/kontak', 'contact')->name('contact');
    Route::get('/tentang', 'tentang')->name('tentang');
    Route::get('/pengajar', 'pengajar')->name('pengajar');
    Route::get('/galeri', 'galeri')->name('galeri');
    Route::get('/sertifikasi-guru', 'sertifikasiGuru')->name('sertifikasi.guru');
});
