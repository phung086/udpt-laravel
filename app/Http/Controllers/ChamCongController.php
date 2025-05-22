<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChamCongController extends Controller
{
    public function index()
    {
        // Nếu là admin: xem toàn bộ bảng chấm công
        // Nếu là nhân viên: chỉ xem của chính mình
        return view('chamcong.index');
    }

    public function create()
    {
        return view('chamcong.create');
    }

    public function store(Request $request)
    {
        // Lưu dữ liệu chấm công (ngày, ca làm, trạng thái)
    }

    public function edit($id)
    {
        return view('chamcong.edit');
    }

    public function update(Request $request, $id)
    {
        // Cập nhật thông tin chấm công
    }

    public function destroy($id)
    {
        // Xoá dòng chấm công (chỉ admin)
    }
}
