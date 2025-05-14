@extends('layouts.app')
@section('title', 'Danh sách Nhân viên')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">📋 Danh sách nhân viên</h2>

    <a href="{{ route('nhanvien.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-person-plus-fill"></i> Thêm nhân viên
    </a>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Tên nhân viên</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Phòng ban</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nhanviens as $nv)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $nv->ho_ten }}</td>
                <td>{{ $nv->email }}</td>
                <td>{{ $nv->so_dien_thoai }}</td>
                <td>{{ $nv->phongBan->ten_phong_ban ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('nhanvien.edit', $nv->id) }}" class="btn btn-sm btn-primary">
                        <i class="bi bi-pencil-square"></i> Sửa
                    </a>

                    <form action="{{ route('nhanvien.destroy', $nv->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Bạn chắc chắn muốn xoá?')">
                            <i class="bi bi-trash"></i> Xoá
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection