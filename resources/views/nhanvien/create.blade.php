@extends('layouts.app')
@section('title', 'Thêm nhân viên')

@section('content')
<div class="container">
    <h3>➕ Thêm nhân viên</h3>
    <form method="POST" action="{{ route('nhanvien.store') }}">
        @csrf
        <div class="mb-3">
            <label>Họ tên</label>
            <input type="text" name="ho_ten" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Số điện thoại</label>
            <input type="text" name="so_dien_thoai" class="form-control">
        </div>
        <div class="mb-3">
            <label>Phòng ban</label>
            <select name="phong_ban_id" class="form-select">
                @foreach($phongbans as $pb)
                <option value="{{ $pb->id }}">{{ $pb->ten_phong_ban }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
</div>
@endsection