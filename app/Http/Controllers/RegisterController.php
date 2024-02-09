<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Sesuaikan dengan model User Anda

class RegisterController extends Controller
{
    // Menampilkan formulir pendaftaran
    public function showForm()
    {
        return view('register');
    }

    // Menangani proses pendaftaran
    public function submit(Request $request)
    {
        // Validasi data yang dikirimkan oleh formulir
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat pengguna baru
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        // Redirect ke halaman sukses atau halaman lain sesuai kebutuhan Anda
        return redirect()->route('register.success');
    }

    // Halaman sukses setelah pendaftaran
    public function success()
    {
        return view('register_success');
    }
}
