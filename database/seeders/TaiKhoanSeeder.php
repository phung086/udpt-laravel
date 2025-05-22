<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tai_khoans')->insert([
            ['nhan_vien_id' => 1, 'username' => 'admin', 'mat_khau' => bcrypt('123456'), 'vai_tro' => 'admin'],
            ['nhan_vien_id' => 2, 'username' => 'user1', 'mat_khau' => bcrypt('123456'), 'vai_tro' => 'nhanvien'],
        ]);
    }
}
