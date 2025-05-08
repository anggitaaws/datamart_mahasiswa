@extends('auth')

@section('title')
Login
@endsection

@section('content')
<style>
    .card-group {
        display: flex;
        gap: 30px;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .bg-binus {
        background-color: #ffff;
    }

    .logo-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .logo-container img {
        max-width: 300px; /* Perbesar ukuran logo */
        border-radius: 10px;
        background-color: white;
        padding: 10px;
    }

    .form-card {
        background-color: #D0EFFF;
    }

    .input-group-text {
        background-color: #E9F7FF;
    }

    .btn-primary {
        background-color: #1167B1; /* Tombol berwarna biru */
        color: white; /* Tulisan putih */
        border: none;
    }

    .btn-primary:hover {
        background-color: #0e4f87; /* Warna biru lebih gelap saat hover */
    }

    @media (max-width: 768px) {
        .card-group {
            flex-direction: column-reverse;
            min-height: auto;
        }

        .card {
            width: 100% !important;
        }

        .logo-container img {
            max-width: 180px; /* Ukuran logo untuk layar kecil */
        }
    }
</style>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <div class="card-group d-flex gap-3">
                <!-- Kolom Logo -->
                <div class="card text-white bg-binus py-5 d-md-down-none flex-fill">
                    <div class="card-body logo-container">
                        <img src="{{ asset('assets/img/logo_binus.jpg') }}" alt="Logo Binus">
                    </div>
                </div>

                <!-- Kolom Form Login -->
                <div class="card p-4 form-card flex-fill">
                    <div class="card-body">
                        <h1 class="text-center mb-3">Login</h1>
                        <p class="text-muted text-center">Sign in to your account</p>

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <!-- Email Input -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-user"></i> 
                                    </span>
                                </div>
                                <input type="text" name="email" placeholder="Email Address"
                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    value="{{ old('email') }}" required autofocus>
                            </div>

                            <!-- Password Input -->
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-lock"></i> <!-- Icon Password -->
                                    </span>
                                </div>
                                <input type="password" name="password" placeholder="Password"
                                    class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" required>
                            </div>

                            <!-- Error Message -->
                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <!-- Login Button -->
                            <div class="row justify-content-center">
                                <div class="col-6 text-center">
                                    <button class="btn btn-primary px-4" type="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
