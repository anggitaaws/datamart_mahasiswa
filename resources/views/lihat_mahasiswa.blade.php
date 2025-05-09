@extends('admin')

@section('title')
    <title>Data Mahasiswa</title>
@endsection

@section('content')
<main class="main" style="background-color: white;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
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
                                <table class="table table-bordered table-striped custom-table">
                                    <thead>
                                        <tr class="align-items-center">
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
                                        @if ($data_mahasiswa->count() > 0)
                                            @foreach ($data_mahasiswa as $index => $mhs)
                                                <tr>
                                                    <td class="text-center align-middle">
                                                        {{ ($data_mahasiswa->currentPage() - 1) * $data_mahasiswa->perPage() + $index + 1 }}
                                                    </td>
                                                    <td class="align-middle">{{ $mhs->nim }}</td>
                                                    <td class="align-middle">{{ $mhs->name }}</td> 
                                                    <td class="align-middle">{{ $mhs->phone }}</td>
                                                    <td class="align-middle">{{ $mhs->email }}</td>
                                                    <td class="text-center align-middle">{{ $mhs->angkatan }}</td>
                                                    <td class="text-center align-middle">
                                                        <div class="d-flex justify-content-center">
                                                            <a href="{{ route('mahasiswa.show', $mhs->id) }}" class="btn btn-sm mr-2" style="background-color: #1167B1; color: white;">Detail</a>
                                                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-sm mr-2" style="background-color: #1167B1; color: white;">Edit</a>
                                                            <form action="{{ route('mahasiswa.delete', $mhs->id) }}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm" style="background-color: #1167B1; color: white;" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                        <tr>
                                            <td colspan="7" class="text-center text-primary">Tidak ada data mahasiswa.</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                            {{-- Pagination --}}
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <medium>
                                        Menampilkan {{ $data_mahasiswa->firstItem() }} - {{ $data_mahasiswa->lastItem() }} dari total {{ $data_mahasiswa->total() }} data
                                    </medium>
                                </div>
                                <div>
                                    {{ $data_mahasiswa->links() }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-table,
        .custom-table thead,
        .custom-table tbody,
        .custom-table tr,
        .custom-table td,
        .custom-table th {
            background-color: white !important;
        }

        .custom-table td, .custom-table th {
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
            font-size: 0.875rem;
        }

        .pagination .page-item {
            margin: 0 2px;
        }

        .pagination .page-link {
            color: #1167B1;
            border-color: #d0e0f0;
            padding: 0.3rem 0.6rem;
            font-size: 0.8rem;
            border-radius: 0.2rem;
        }

        .pagination .page-item.active .page-link {
            background-color: #1167B1;
            border-color: #1167B1;
            color: white;
        }

        .card-body .d-flex {
            gap: 10px;
        }

        .card-body .btn-sm {
            width: 80px;
        }
    </style>
</main>
@endsection
