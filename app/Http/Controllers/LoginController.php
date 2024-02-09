<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        // Validasi kredensial
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Proses autentikasi
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, arahkan ke halaman yang diinginkan
            return redirect()->intended('/'); // Ganti '/' dengan rute yang diinginkan setelah login
        }

        // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
        return redirect()->route('login')->with('error', 'Email atau password salah.');
    }
}
