<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
         Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('tambah_mahasiswa') }}">
         Tambah Data Mahasiswa
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('tambah_alumni') }}">
         Tambah Data Alumni
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('mahasiswa.index') }}">
        Lihat Angkatan Mahasiswa
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('alumni.index') }}">
        Lihat Angkatan Alumni
            </a>
        </li>
    </ul>
</nav>