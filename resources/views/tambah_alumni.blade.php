@extends('admin')

@section('title')
    <title>Tambah Data Alumni</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Tambah Data Alumni</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Tambah Data Alumni</h4>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST" class="form-horizontal">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Nama</label>
                                    <div class="col-md-6">
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">NIM</label>
                                    <div class="col-md-6">
                                        <input type="text" name="nim" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">No telepon</label>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Tempat Lahir</label>
                                    <div class="col-md-6">
                                        <input type="text" name="tempat_lahir" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Tanggal Lahir</label>
                                    <div class="col-md-6">
                                        <input type="date" name="tanggal_lahir" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Jenis Kelamin</label>
                                    <div class="col-md-6">
                                        <select name="jenis_kelamin" class="form-control" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Asal SLTA</label>
                                    <div class="col-md-6">
                                        <input type="text" name="asal_slta" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Program Studi</label>
                                    <div class="col-md-6">
                                        <input type="text" name="program_studi" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Angkatan Alumni</label>
                                    <div class="col-md-6">
                                        <input type="text" name="angkatan_alumni" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Institusi Pekerjaan</label>
                                    <div class="col-md-6">
                                        <input type="text" name="institusi_pekerjaan" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Jenis Pekerjaan</label>
                                    <div class="col-md-6">
                                        <input type="text" name="jenis_pekerjaan" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-9 offset-md-3">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Batal</a>
                                    </div>
                                </div>
                            </form>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
