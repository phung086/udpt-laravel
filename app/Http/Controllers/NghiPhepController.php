<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NghiPhepController extends Controller
{
    public function index()
    {
        // Nếu là admin: xem toàn bộ yêu cầu nghỉ phép
        // Nếu là nhân viên: chỉ xem yêu cầu cá nhân
        return view('nghiphep.index');
    }

    public function create()
    {
        return view('nghiphep.create');
    }

    public function store(Request $request)
    {
        // Lưu đơn xin nghỉ (từ ngày - đến ngày, lý do)
    }

    public function update(Request $request, $id)
    {
        // Admin duyệt hoặc từ chối đơn nghỉ phép
    }

    public function destroy($id)
    {
        // Xoá đơn nghỉ (admin hoặc người tạo)
    }
}
