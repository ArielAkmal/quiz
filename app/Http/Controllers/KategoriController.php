<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kategori;

class KategoriController extends Controller
{
    public function tampil()
    {
        $kategoris = Kategori::all();

        return view('kategori.daftar', [
            'kategoris' => $kategoris
        ]);
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required|regex:/^[a-zA-Z\s]+$/'
        ], [
            'nama.required' => 'Nama kategori wajib diisi.',
            'nama.regex' => 'Nama kategori tidak boleh mengandung angka.'
        ]);

        $kategori = new Kategori;

        $kategori->nama = $request->get('nama');

        $kategori->save();

        return redirect('/daftar-kategori')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function ubah(Kategori $kategori)
    {
        return view('kategori.ubah', [
            'kategori' => $kategori
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required|regex:/^[a-zA-Z\s]+$/'
        ], [
            'nama.required' => 'Nama kategori wajib diisi.',
            'nama.regex' => 'Nama kategori tidak boleh mengandung angka.'
        ]);

        $kategori = Kategori::find($request->get('id'));

        $kategori->nama = $request->get('nama');

        $kategori->save();

        return redirect('/daftar-kategori')
            ->with('success', 'Kategori berhasil diubah.');
    }

    public function hapus(Kategori $kategori)
    {
        $kategori->delete();

        return redirect('/daftar-kategori')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}
