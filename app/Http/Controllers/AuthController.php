<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
        $user = \App\Models\TaiKhoan::where('username', $request->username)->first();

        if ($user && \Illuminate\Support\Facades\Hash::check($request->password, $user->mat_khau)) {
            session([
                'user_id' => $user->id,
                'vai_tro' => $user->vai_tro,
                'chi_nhanh_id' => $user->chi_nhanh_id ?? null,
                'username' => $user->username,
            ]);

            return redirect()->route('nhanvien.index');
        }

        return back()->with('error', 'Sai tài khoản hoặc mật khẩu!');
    }


    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}
