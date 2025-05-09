@extends('admin')

@section('title')
    <title>Edit Data Alumni</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item active">Edit Data Alumni</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Biodata Alumni</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('alumni.update', $alumni->id) }}" method="POST" class="form-horizontal">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Nama</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" value="{{ $alumni->name }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">NIM</label>
                                    <div class="col-md-6">
                                        <input type="text" name="nim" class="form-control" value="{{ $alumni->nim }}" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Tempat Lahir</label>
                                    <div class="col-md-6">
                                        <input type="text" name="tempat_lahir" class="form-control" value="{{ $alumni->tempat_lahir }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Tanggal Lahir</label>
                                    <div class="col-md-6">
                                        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $alumni->tanggal_lahir }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Jenis Kelamin</label>
                                    <div class="col-md-6">
                                        <select name="jenis_kelamin" class="form-control" required>
                                            <option value="Laki-laki" {{ $alumni->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                            <option value="Perempuan" {{ $alumni->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Asal SLTA</label>
                                    <div class="col-md-6">
                                        <input type="text" name="asal_slta" class="form-control" value="{{ $alumni->asal_slta }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Program Studi</label>
                                    <div class="col-md-6">
                                        <input type="text" name="program_studi" class="form-control" value="{{ $alumni->program_studi }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Angkatan Alumni</label>
                                    <div class="col-md-6">
                                        <input type="text" name="angkatan_alumni" class="form-control" value="{{ $alumni->angkatan_alumni }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Institusi Pekerjaan</label>
                                    <div class="col-md-6">
                                        <input type="text" name="institusi_pekerjaan" class="form-control" value="{{ $alumni->institusi_pekerjaan }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Jenis Pekerjaan</label>
                                    <div class="col-md-6">
                                        <input type="text" name="jenis_pekerjaan" class="form-control" value="{{ $alumni->jenis_pekerjaan }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-9 offset-md-3">
                                        <button type="submit" class="btn" style="background-color: #1167B1; color: white;">Simpan</button>
                                        <a href="{{ route('alumni.index') }}" class="btn btn-secondary">Batal</a>
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
