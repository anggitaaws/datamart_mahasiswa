@extends('admin')

@section('title')
    <title>Data Mahasiswa</title>
@endsection

@section('content')
<main class="main" style="background-color: white;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active">Lihat Angkatan Mahasiswa</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #D0EFFF;">
                            <h4 class="card-title">Lihat Angkatan Mahasiswa</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" style="width: 100%; background-color: white;">
                                    <thead>
                                        <tr class="align-items-center" style="background-color: white; color: #1167B1;">
                                            <th class="text-center align-middle">No</th>
                                            <th class="text-center align-middle">NIM</th>
                                            <th class="text-center align-middle">Nama</th>
                                            <th class="text-center align-middle">No Telepon</th>
                                            <th class="text-center align-middle">Email</th>
                                            <th class="text-center align-middle">Angkatan</th>
                                            <th class="text-center align-middle">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($lihat_mahasiswa->count() > 0)
                                            @foreach ($lihat_mahasiswa as $index => $mhs)
                                                <tr>
                                                    <td class="text-center align-middle">{{ $index + 1 }}</td>
                                                    <td class="text-center align-middle">{{ $mhs->nim }}</td>
                                                    <td class="text-center align-middle">{{ $mhs->nama }}</td>
                                                    <td class="text-center align-middle">{{ $mhs->no_telepon }}</td>
                                                    <td class="text-center align-middle">{{ $mhs->email }}</td>
                                                    <td class="text-center align-middle">{{ $mhs->angkatan }}</td>
                                                    <td class="align-middle">
                                                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="7" class="text-center">Tidak ada data mahasiswa.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center mt-3">
                                {{ $lihat_mahasiswa->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .table td, .table th {
            color: #1167B1;
            vertical-align: middle;
        }

        .btn-sm {
            font-size: 0.75rem;
            padding: 0.4rem 0.6rem;
            border-radius: 0.2rem;
        }

        .pagination {
            justify-content: center;
        }

        .pagination .page-link {
            color: #1167B1;
            border-color: #d0e0f0;
        }

        .pagination .page-item.active .page-link {
            background-color: #1167B1;
            border-color: #1167B1;
            color: white;
        }
    </style>
</main>
@endsection
