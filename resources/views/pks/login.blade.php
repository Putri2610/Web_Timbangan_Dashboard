<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Monitoring Timbangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #ebf0f5; /* Abu-abu lembut senada dashboard */
            height: 100vh;
        }
        .login-container {
            max-width: 450px;
            width: 100%;
        }
        .card-login {
            border: none;
            border-radius: 16px;
            background-color: #ffffff;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
        }
        .btn-navy {
            background-color: #234275; /* Warna utama sesuai sidebar kamu */
            color: #ffffff;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-navy:hover {
            background-color: #1a3258;
            color: #ffffff;
        }
        .form-control:focus {
            border-color: #234275;
            box-shadow: 0 0 0 0.25rem rgba(35, 66, 117, 0.15);
        }
        .brand-icon {
            font-size: 2.5rem;
            color: #234275;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">

<div class="login-container p-3">
    <div class="card card-login p-4 p-md-5">
        <div class="text-center mb-4">
            <div class="mb-2">
                <i class="bi bi-shield-lock-fill brand-icon"></i>
            </div>
            <h4 class="fw-bold text-dark mb-1">Admin Login</h4>
            <p class="text-muted small">Monitoring Jaringan & Timbangan PKS</p>
        </div>

        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show small" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-split="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('login.auth') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label text-secondary small fw-medium">Username</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-person"></i></span>
                    <input type="text" name="username" class="form-construct form-control bg-light border-start-0 @error('username') is-invalid @enderror" id="username" placeholder="Masukkan username" value="{{ old('username') }}" required autofocus>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label text-secondary small fw-medium">Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-lock"></i></span>
                    <input type="password" name="password" class="form-construct form-control bg-light border-start-0" id="password" placeholder="••••••••" required>
                </div>
            </div>

            <button type="submit" class="btn btn-navy w-100 py-2.5 mb-3">Masuk Ke Dashboard</button>
            
            <div class="text-center">
                <a href="{{ url('/') }}" class="text-decoration-none small text-secondary"><i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda</a>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>