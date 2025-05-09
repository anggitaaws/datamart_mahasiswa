<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $data_alumni = Alumni::paginate(10);
        return view('lihat_alumni', compact('data_alumni'));
    }


    public function create()
    {
        return view('tambah_alumni');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'nim' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'jenis_kelamin' => 'required',
        'asal_slta' => 'required',
        'program_studi' => 'required',
        'angkatan_alumni' => 'required',
        'institusi_pekerjaan' => 'required',
        'jenis_pekerjaan' => 'required',
    ]);

    Alumni::create($request->all());

    return redirect()->route('alumni.index')->with('success', 'Data alumni berhasil ditambahkan.');
}

    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('edit_alumni', compact('alumni'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'asal_slta' => 'required',
            'program_studi' => 'required',
            'angkatan_alumni' => 'required',
            'institusi_pekerjaan' => 'required',
            'jenis_pekerjaan' => 'required',
        ]);

        $alumni = Alumni::findOrFail($id);
        $alumni->update($request->all());

        return redirect()->route('alumni.index')->with('success', 'Data alumni berhasil diperbarui.');
    }

    public function show($id)
{
    $alumni = Alumni::findOrFail($id);
    return view('detail_alumni', compact('alumni'));
}

    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->delete();

        return redirect()->route('alumni.index')->with('success', 'Data alumni berhasil dihapus.');
    }
}

