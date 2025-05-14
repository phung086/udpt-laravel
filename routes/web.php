<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\PhongBanController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('login.handle');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/phongban', [PhongBanController::class, 'index'])->name('phongban.index');
Route::get('/phongban/create', [PhongBanController::class, 'create'])->name('phongban.create');
Route::post('/phongban/store', [PhongBanController::class, 'store'])->name('phongban.store');
Route::delete('/phongban/{id}', [PhongBanController::class, 'destroy'])->name('phongban.destroy');


Route::get('/nhanvien', [NhanVienController::class, 'index'])->name('nhanvien.index');
Route::get('/nhanvien/create', [NhanVienController::class, 'create'])->name('nhanvien.create');
Route::post('/nhanvien/store', [NhanVienController::class, 'store'])->name('nhanvien.store');
Route::get('/nhanvien/{id}/edit', [NhanVienController::class, 'edit'])->name('nhanvien.edit');
Route::put('/nhanvien/{id}', [NhanVienController::class, 'update'])->name('nhanvien.update');
Route::delete('/nhanvien/{id}', [NhanVienController::class, 'destroy'])->name('nhanvien.destroy');
