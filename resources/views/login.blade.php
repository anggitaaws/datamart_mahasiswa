@extends('layout')

@section('title')
    <title>Login</title>
@endsection

@section('content')
    <style>
        body {
            background-color: #007BFF;
        }

        .login-image-card {
            background-image: url('{{ asset('logobinus.png') }}');
            background-size: cover;
            background-position: center;
            min-height: 400px;
            max-height: 450px;
        }

        .login-logo {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
        }

        .btn-login-custom {
            background-color: #004080;
            color: white;
            border: none;
        }

        .btn-login-custom:hover {
            background-color: #002f66;
        }

        @media (max-width: 768px) {
            .login-image-card {
                min-height: 250px;
                max-height: 300px;
            }

            .login-logo {
                width: 80px;
            }
        }
    </style>

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            
            <!-- Kolom Kiri: Gambar + Logo -->
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="card login-image-card text-white d-flex align-items-center justify-content-center p-4 shadow">
                    <div class="text-center">
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Form Login -->
            <div class="col-md-6">
                <div class="card p-4 shadow" style="background-color: #D0EFFF">
                    <div class="card-body text-center" >
                        <h1 class="mb-3">Login</h1>
                        <p class="text-muted">Sign in to your account</p>
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-user"></i>
                                    </span>
                                </div>
                                <input type="text" name="email"
                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    placeholder="Username" value="{{ old('email') }}" required autofocus>
                            </div>

                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-lock"></i>
                                    </span>
                                </div>
                                <input type="password" name="password"
                                    class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                    placeholder="Password" required>
                            </div>

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="d-flex justify-content-center mb-3">
                                <button type="submit" class="btn btn-login-custom px-4">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
