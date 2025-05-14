<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhongBan;

class PhongBanController extends Controller
{
    public function index()
    {
        $phongbans = PhongBan::all();
        return view('phongban.index', compact('phongbans'));
    }

    public function create()
    {
        return view('phongban.create');
    }

    public function store(Request $request)
    {
        PhongBan::create([
            'ten_phong_ban' => $request->ten_phong_ban,
            'chi_nhanh_id' => 1 // ⚠️ Tạm cứng: phân tán theo chi nhánh Hà Nội
        ]);
        return redirect()->route('phongban.index');
    }

    public function destroy($id)
    {
        PhongBan::destroy($id);
        return back();
    }
}
