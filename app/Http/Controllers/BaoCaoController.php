<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaoCaoController extends Controller
{
    public function index()
    {
        // Hiển thị form chọn loại báo cáo: lương, chấm công, nghỉ phép
        return view('baocao.index');
    }

    public function exportPDF()
    {
        // Sinh file PDF tổng hợp lương, nghỉ phép,...
    }

    public function exportExcel()
    {
        // Xuất file Excel (nếu muốn thêm)
    }
}
