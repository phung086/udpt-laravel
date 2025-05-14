@extends('layouts.app')
@section('title', 'Danh sách Phòng ban')
@section('content')
<div class="container">
    <h2 class="mb-4"><i class="bi bi-diagram-3"></i> Danh sách phòng ban</h2>

    <a href="{{ route('phongban.create') }}" class="btn btn-primary mb-3">+ Thêm mới</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Tên phòng ban</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($phongbans as $pb)
            <tr>
                <td>{{ $pb->id }}</td>
                <td>{{ $pb->ten_phong_ban }}</td>
                <td>
                    <form action="{{ route('phongban.destroy', $pb->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Xoá phòng ban này?')">Xoá</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection