<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function loginView()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        $findEmail = User::where('email', $data['email'])->first();

        if (empty($findEmail)) {
            return redirect()->back()->withErrors('Akun tidak ditemukan');
        }

        if (Hash::check($data['password'], $findEmail->password)) {
            Auth::attempt($data);
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withErrors('Password anda salah');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
