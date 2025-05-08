@extends('admin')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tentang Kami</h4>
                        </div>
                        <div class="card-body">
                            <h4>Selamat Datang di Data Mart Binus Online Learning</h4>
                                <p>
                                    BINUS Online merupakan bagian dari BINUS UNIVERSITY, sebuah lembaga pendidikan berbasis teknologi informasi yang sudah berpengalaman dalam menyelenggarakan Pendidikan menggunakan teknologi informasi dan komunikasi (ICT) bagi para mahasiswa sejak tahun 2009.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection