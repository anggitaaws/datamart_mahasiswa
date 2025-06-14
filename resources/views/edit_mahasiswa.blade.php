@extends('admin')

@section('title')
    <title>Edit Data Mahasiswa</title>
@endsection

@section('content')
<style>
    .btn-primary {
        background-color: #1167B1;
        color: white;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0e4f87;
    }
</style>

<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Edit Data Mahasiswa</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Biodata Mahasiswa</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" class="form-horizontal">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Nama Mahasiswa</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" value="{{ old('name', $mahasiswa->name) }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">NIM</label>
                                    <div class="col-md-6">
                                        <input type="text" name="nim" class="form-control" value="{{ old('nim', $mahasiswa->nim) }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">No Telepon</label>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" class="form-control" value="{{ old('phone', $mahasiswa->phone) }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Email Binus</label>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control" value="{{ old('email', $mahasiswa->email) }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Angkatan Mahasiswa</label>
                                    <div class="col-md-6">
                                        <input type="text" name="angkatan" class="form-control" value="{{ old('angkatan', $mahasiswa->angkatan) }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-9 offset-md-3">
                                        <button type="submit" class="btn" style="background-color: #1167B1; color: white;">Simpan</button>
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
