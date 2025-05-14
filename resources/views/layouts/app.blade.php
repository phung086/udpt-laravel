<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Quản lý Nhân sự')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">QLNS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="/nhanvien">Nhân viên</a></li>
                    <li class="nav-item"><a class="nav-link" href="/phongban">Phòng ban</a></li>
                </ul>

                @if (session('username'))
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item text-white me-3">
                        👤 <strong>{{ session('username') }}</strong>
                        <span class="badge bg-secondary">{{ session('vai_tro') }}</span>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light btn-sm" href="{{ route('logout') }}">
                            Đăng xuất
                        </a>
                    </li>
                </ul>
                @endif
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container py-4">
        @if (session()->has('user_id'))
        @yield('content')
        @else
        <div class="alert alert-warning">
            Bạn cần đăng nhập để truy cập hệ thống. <a href="{{ route('login') }}">Đăng nhập ngay</a>.
        </div>
        @endif
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>