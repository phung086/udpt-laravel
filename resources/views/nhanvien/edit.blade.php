@extends('layouts.app')
@section('title', 'Sửa nhân viên')

@section('content')
<div class="container">
    <h3>✏️ Sửa nhân viên</h3>
    <form method="POST" action="{{ route('nhanvien.update', $nhanvien->id) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Họ tên</label>
            <input type="text" name="ho_ten" class="form-control" value="{{ $nhanvien->ho_ten }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $nhanvien->email }}">
        </div>
        <div class="mb-3">
            <label>Số điện thoại</label>
            <input type="text" name="so_dien_thoai" class="form-control" value="{{ $nhanvien->so_dien_thoai }}">
        </div>
        <div class="mb-3">
            <label>Phòng ban</label>
            <select name="phong_ban_id" class="form-select">
                @foreach($phongbans as $pb)
                <option value="{{ $pb->id }}" {{ $pb->id == $nhanvien->phong_ban_id ? 'selected' : '' }}>
                    {{ $pb->ten_phong_ban }}
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection