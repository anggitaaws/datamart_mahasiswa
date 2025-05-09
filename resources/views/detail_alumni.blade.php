@extends('admin')

@section('title')
    <title>Detail Alumni</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item active">Detail Alumni</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Detail Biodata Alumni</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Nama</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $alumni->name }}" readonly>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">NIM</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $alumni->nim }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Tempat Lahir</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $alumni->tempat_lahir }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Tanggal Lahir</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" value="{{ $alumni->tanggal_lahir }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Jenis Kelamin</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $alumni->jenis_kelamin }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Asal SLTA</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $alumni->asal_slta }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Program Studi</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $alumni->program_studi }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Angkatan Alumni</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $alumni->angkatan_alumni }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Institusi Pekerjaan</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $alumni->institusi_pekerjaan }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Jenis Pekerjaan</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $alumni->jenis_pekerjaan }}" readonly>
                                </div>
                            </div>

                            <a href="{{ route('alumni.index') }}" class="btn btn-sm" style="background-color: #1167B1; color: white;">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
