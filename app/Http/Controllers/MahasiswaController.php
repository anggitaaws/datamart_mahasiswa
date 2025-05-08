<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $lihat_mahasiswa = Mahasiswa::paginate(10);
        return view('lihat_mahasiswa', compact('lihat_mahasiswa'));
    }

    public function create()
    {
        return view('tambah_mahasiswa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'no_telepon' => 'required',
            'email' => 'required',
            'angkatan' => 'required',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('detail_mahasiswa', compact('lihat_mahasiswa'));
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('edit_mahasiswa', compact('lihat_mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data sebelum disimpan
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'no_telepon' => 'required',
            'email' => 'required',
            'angkatan' => 'required',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diubah');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
