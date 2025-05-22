<?php

namespace App\Http\Controllers;

use App\Models\Luong;
use Illuminate\Http\Request;

class LuongController extends Controller
{
    public function index()
    {
        $luongs = Luong::with('nhanVien')->get();
        return view('luong.index', compact('luongs'));
    }

    public function create()
    {
        return view('luong.create');
    }

    public function store(Request $request)
    {
        Luong::create($request->all());
        return redirect()->route('luong.index')->with('success', 'Đã thêm lương thành công.');
    }

    public function edit($id)
    {
        $luong = Luong::findOrFail($id);
        return view('luong.edit', compact('luong'));
    }

    public function update(Request $request, $id)
    {
        $luong = Luong::findOrFail($id);
        $luong->update($request->all());
        return redirect()->route('luong.index')->with('success', 'Đã cập nhật lương thành công.');
    }

    public function destroy($id)
    {
        Luong::destroy($id);
        return redirect()->route('luong.index')->with('success', 'Đã xoá lương.');
    }
}
