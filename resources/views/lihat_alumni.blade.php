@extends('admin')

@section('title')
    <title>Data Alumni</title>
@endsection

@section('content')
<main class="main" style="background-color: white;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active">Lihat Angkatan Alumni</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #D0EFFF;">
                            <h4 class="card-title">Lihat Angkatan Alumni</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped custom-table" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle">No</th>
                                            <th class="text-center align-middle">NIM</th>
                                            <th class="text-center align-middle">Nama</th>
                                            <th class="text-center align-middle">Jenis Kelamin</th>
                                            <th class="text-center align-middle">Tahun Lulus</th>
                                            <th class="text-center align-middle">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($data_alumni->count() > 0)
                                            @foreach ($data_alumni as $index => $alumni)
                                                <tr>
                                                    <td class="text-center align-middle">{{ $index + 1 }}</td>
                                                    <td class="text-center align-middle">{{ $alumni->nim }}</td>
                                                    <td class="text-center align-middle">{{ $alumni->name }}</td>
                                                    <td class="text-center align-middle">{{ $alumni->jenis_kelamin }}</td>
                                                    <td class="text-center align-middle">{{ $alumni->angkatan_alumni }}</td>
                                                    <td class="text-center align-middle">
                                                        <div class="d-flex justify-content-center">
                                                            <a href="{{ route('alumni.show', $alumni->id) }}" class="btn btn-sm mr-2" style="background-color: #1167B1; color: white;">Detail</a>
                                                            <a href="{{ route('alumni.edit', $alumni->id) }}" class="btn btn-sm mr-2" style="background-color: #1167B1; color: white;">Edit</a>
                                                            <form action="{{ route('alumni.delete', $alumni->id) }}" method="POST" class="d-inline">
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
                                                <td colspan="6" class="text-center">Tidak ada data alumni.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center mt-3">
                                {{ $data_alumni->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Warna latar putih konsisten di semua elemen tabel */
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

        .pagination .page-link {
            color: #1167B1;
            border-color: #d0e0f0;
        }

        .pagination .page-item.active .page-link {
            background-color: #1167B1;
            border-color: #1167B1;
            color: white;
        }

        /* Optional: Ensure buttons are aligned and properly spaced */
        .card-body .d-flex {
            gap: 10px; /* Adjust gap between buttons */
        }

        /* Optional: Make the action buttons wider and more uniform */
        .card-body .btn-sm {
            width: 80px; /* Uniform button width */
        }
    </style>
</main>
@endsection
