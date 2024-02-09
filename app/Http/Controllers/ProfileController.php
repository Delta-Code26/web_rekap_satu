<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Menampilkan profil pengguna.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        // Logika untuk menampilkan profil pengguna
        return view('profile');
    }
}
