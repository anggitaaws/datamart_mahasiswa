@extends('admin')

@section('title')
    <title>Detail Mahasiswa</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item active">Detail Mahasiswa</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Detail Biodata Mahasiswa</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Nama Mahasiswa</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $mahasiswa->name }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">NIM</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $mahasiswa->nim }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">No Telepon</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $mahasiswa->phone }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Email Binus</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" value="{{ $mahasiswa->email }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Angkatan Mahasiswa</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $mahasiswa->angkatan }}" readonly>
                                </div>
                            </div>

                                <a href="{{ route('mahasiswa.index') }}" class="btn btn-sm" style="background-color: #1167B1; color: white;">Kembali</a>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
