<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    /**
     * Menampilkan daftar karyawan.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua data karyawan dari tabel 'karyawan'
        $karyawan = Karyawan::all();

        // Menampilkan view 'karyawan' dan meneruskan data karyawan ke dalamnya
        return view('karyawan.index', compact('karyawan'));
    }

    /**
     * Menampilkan formulir untuk menambah karyawan baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menampilkan formulir pembuatan karyawan baru
        return view('karyawan.create');
    }

    /**
     * Menyimpan karyawan baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data masukan dari formulir
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
        ]);

        // Simpan data karyawan baru ke dalam database
        $karyawan = Karyawan::create($validatedData);

        // Redirect ke halaman daftar karyawan dengan pesan sukses
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    /**
     * Menampilkan formulir untuk mengedit karyawan tertentu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Mengambil data karyawan berdasarkan ID
        $karyawan = Karyawan::findOrFail($id);

        // Menampilkan formulir edit dengan data karyawan
        return view('karyawan.edit', compact('karyawan'));
    }

    /**
     * Memperbarui informasi karyawan tertentu dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi data masukan dari formulir
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
        ]);

        // Mengambil data karyawan berdasarkan ID
        $karyawan = Karyawan::findOrFail($id);

        // Mengupdate data karyawan
        $karyawan->update($validatedData);

        // Redirect ke halaman daftar karyawan dengan pesan sukses
        return redirect()->route('karyawan.index')->with('success', 'Informasi karyawan berhasil diperbarui!');
    }

    /**
     * Menghapus karyawan tertentu dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Menghapus data karyawan berdasarkan ID
        Karyawan::findOrFail($id)->delete();

        // Redirect ke halaman daftar karyawan dengan pesan sukses
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus!');
    }
}
