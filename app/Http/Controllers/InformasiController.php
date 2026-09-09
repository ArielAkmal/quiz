<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Informasi;
use App\Models\Kategori;

class InformasiController extends Controller
{
    public function tampil()
    {
        $informasis = Informasi::all();

        return view('informasi.daftar', [
            'informasis' => $informasis
        ]);
    }

    public function create()
    {
        $kategoris = Kategori::all();

        return view('informasi.create', [
            'kategoris' => $kategoris
        ]);
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'isi' => 'required',
            'kategori_id' => 'required',
            'status' => 'required'
        ], [
            'judul.required' => 'Judul wajib diisi.',
            'ringkasan.required' => 'Ringkasan wajib diisi.',
            'isi.required' => 'Isi informasi wajib diisi.',
            'kategori_id.required' => 'Kategori wajib dipilih.',
            'status.required' => 'Status wajib dipilih.'
        ]);

        $informasi = new Informasi;

        $informasi->kategori_id = $request->get('kategori_id');
        $informasi->judul = $request->get('judul');
        $informasi->ringkasan = $request->get('ringkasan');
        $informasi->isi = $request->get('isi');
        $informasi->sumber = $request->get('sumber');
        $informasi->status = $request->get('status');

        $informasi->save();

        return redirect('/daftar-informasi')
            ->with('success', 'Informasi berhasil ditambahkan!');
    }

    public function ubah(Informasi $informasi)
    {
        $kategoris = Kategori::all();

        return view('informasi.ubah', [
            'informasi' => $informasi,
            'kategoris' => $kategoris
        ]);
    }

    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'isi' => 'required',
            'kategori_id' => 'required',
            'status' => 'required'
        ]);

        $informasi->kategori_id = $request->get('kategori_id');
        $informasi->judul = $request->get('judul');
        $informasi->ringkasan = $request->get('ringkasan');
        $informasi->isi = $request->get('isi');
        $informasi->sumber = $request->get('sumber');
        $informasi->status = $request->get('status');

        $informasi->save();

        return redirect('/daftar-informasi')
            ->with('success', 'Informasi berhasil diubah!');
    }

    public function konfirmasiHapus(Informasi $informasi)
    {
        return view('informasi.hapus', [
            'informasi' => $informasi
        ]);
    }

    public function hapus(Informasi $informasi)
    {
        $informasi->delete();

        return redirect('/daftar-informasi')
            ->with('success', 'Informasi berhasil dihapus!');
    }
}
