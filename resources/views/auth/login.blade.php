@extends('layouts.guest')

@section('title', 'Đăng nhập')

@section('content')
<div class="container mt-5" style="max-width: 400px;">
    <h4 class="mb-3 text-center"><i class="bi bi-box-arrow-in-right"></i> Đăng nhập hệ thống</h4>

    @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('login.handle') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Tài khoản:</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Mật khẩu:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button class="btn btn-primary w-100">Đăng nhập</button>
    </form>
</div>
@endsection