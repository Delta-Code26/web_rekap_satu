<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilPanenSawit;

class HasilPanenSawitController extends Controller
{
    /**
     * Menampilkan daftar hasil panen sawit.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua data hasil panen sawit dari tabel 'hasil_panen_sawit'
        $hasilPanenSawit = HasilPanenSawit::all();

        // Menampilkan view 'hasil_panen_sawit' dan meneruskan data hasil panen sawit ke dalamnya
        return view('hasil_panen_sawit.index', compact('hasilPanenSawit'));
    }

    /**
     * Menampilkan formulir untuk menambah hasil panen sawit baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menampilkan formulir pembuatan hasil panen sawit baru
        return view('hasil_panen_sawit.create');
    }

    /**
     * Menyimpan hasil panen sawit baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data masukan dari formulir
        $validatedData = $request->validate([
            'semester' => 'required|numeric',
            'sks' => 'required|numeric',
        ]);

        // Simpan data hasil panen sawit baru ke dalam database
        $hasilPanenSawit = HasilPanenSawit::create($validatedData);

        // Redirect ke halaman daftar hasil panen sawit dengan pesan sukses
        return redirect()->route('hasil-panen-sawit.index')->with('success', 'Hasil panen sawit berhasil ditambahkan!');
    }

    /**
     * Menampilkan formulir untuk mengedit hasil panen sawit tertentu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_matakuliah)
    {
        // Mengambil data hasil panen sawit berdasarkan ID
        $hasilPanenSawit = HasilPanenSawit::findOrFail($id_matakuliah);

        // Menampilkan formulir edit dengan data hasil panen sawit
        return view('hasil_panen_sawit.edit', compact('hasilPanenSawit'));
    }

    /**
     * Memperbarui informasi hasil panen sawit tertentu dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_matakuliah)
    {
        // Validasi data masukan dari formulir
        $validatedData = $request->validate([
            'semester' => 'required|numeric',
            'sks' => 'required|numeric',
        ]);

        // Mengambil data hasil panen sawit berdasarkan ID
        $hasilPanenSawit = HasilPanenSawit::findOrFail($id_matakuliah);

        // Mengupdate data hasil panen sawit
        $hasilPanenSawit->update($validatedData);

        // Redirect ke halaman daftar hasil panen sawit dengan pesan sukses
        return redirect()->route('hasil-panen-sawit.index')->with('success', 'Informasi hasil panen sawit berhasil diperbarui!');
    }

    /**
     * Menghapus hasil panen sawit tertentu dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_matakuliah)
    {
        // Menghapus data hasil panen sawit berdasarkan ID
        HasilPanenSawit::findOrFail($id)->delete();

        // Redirect ke halaman daftar hasil panen sawit dengan pesan sukses
        return redirect()->route('hasil-panen-sawit.index')->with('success', 'Hasil panen sawit berhasil dihapus!');
    }
}
