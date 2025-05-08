<header class="app-header navbar" style="background-color: #187BCD;">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Logo utama & minimisasi dengan kotak putih presisi -->
    <a class="navbar-brand" href="#" style="display: flex; align-items: center;">
        <div style="background: white; box-shadow: 0 1px 3px rgba(0,0,0,0.1); border-radius: 4px; display: inline-block;">
            <img class="navbar-brand-full" src="{{ asset('assets/img/logobinus.png') }}" width="80" height="45" alt="Logo Binus"
                 style="display: block;">
        </div>
        <img class="navbar-brand-minimized ml-2" src="{{ asset('assets/dw-01/img/brand/sygnet.svg') }}" width="28" height="28" alt="CoreUI Logo">
    </a>

    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Judul teks -->
    <div class="navbar-text ml-3" style="color: white; font-size: 16px; font-weight: 600;">
        Data Mart Binus Online Learning
    </div>

    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-avatar" src="{{ asset('assets/img/logoorang.jpg') }}" alt="logoorang">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <div class="divider"></div>
                <a class="dropdown-item" href="#" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-lock"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</header>
