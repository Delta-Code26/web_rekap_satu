<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Menampilkan daftar pengguna.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua data pengguna dari tabel 'users'
        $users = User::all();

        // Menampilkan view 'users' dan meneruskan data pengguna ke dalamnya
        return view('users', compact('users'));
    }

    /**
     * Menampilkan formulir untuk membuat pengguna baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menampilkan formulir pembuatan pengguna baru
        return view('create-user');
    }

    /**
     * Menyimpan pengguna baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data masukan dari formulir
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);

        // Simpan data pengguna baru ke dalam database
        $user = User::create($validatedData);

        // Redirect ke halaman daftar pengguna dengan pesan sukses
        return redirect('/users')->with('success', 'User created successfully!');
    }

    /**
     * Menampilkan detail pengguna tertentu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Mengambil data pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Menampilkan view 'show-user' dengan data pengguna
        return view('show-user', compact('user'));
    }

    /**
     * Menampilkan formulir untuk mengedit pengguna tertentu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Mengambil data pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Menampilkan formulir edit dengan data pengguna
        return view('edit-user', compact('user'));
    }

    /**
     * Memperbarui informasi pengguna tertentu dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi data masukan dari formulir
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8|max:255',
        ]);

        // Mengambil data pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Mengupdate data pengguna
        $user->update($validatedData);

        // Redirect ke halaman daftar pengguna dengan pesan sukses
        return redirect('/users')->with('success', 'User updated successfully!');
    }

    /**
     * Menghapus pengguna tertentu dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Menghapus data pengguna berdasarkan ID
        User::findOrFail($id)->delete();

        // Redirect ke halaman daftar pengguna dengan pesan sukses
        return redirect('/users')->with('success', 'User deleted successfully!');
    }
}
