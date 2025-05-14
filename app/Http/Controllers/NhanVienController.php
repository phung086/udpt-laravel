<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhanVien;
use App\Models\PhongBan;

class NhanVienController extends Controller
{
    public function index()
    {
        if (session('vai_tro') === 'super_admin') {
            $nhanviens = NhanVien::with('phongBan')->get();
        } else {
            $nhanviens = NhanVien::with('phongBan')
                ->where('chi_nhanh_id', session('chi_nhanh_id'))
                ->get();
        }

        return view('nhanvien.index', compact('nhanviens'));
    }

    public function create()
    {
        $phongbans = PhongBan::all();
        return view('nhanvien.create', compact('phongbans'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['chi_nhanh_id'] = session('chi_nhanh_id');
        NhanVien::create($data);

        return redirect()->route('nhanvien.index');
    }

    public function edit($id)
    {
        $nhanvien = NhanVien::findOrFail($id);
        $phongbans = PhongBan::all();
        return view('nhanvien.edit', compact('nhanvien', 'phongbans'));
    }

    public function update(Request $request, $id)
    {
        $nhanvien = NhanVien::findOrFail($id);
        $nhanvien->update($request->all());

        return redirect()->route('nhanvien.index');
    }

    public function destroy($id)
    {
        NhanVien::destroy($id);
        return back();
    }
}
