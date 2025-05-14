<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nhan_viens')->insert([
            ['ho_ten' => 'Nguyễn Văn A', 'email' => 'a@example.com', 'so_dien_thoai' => '0123456789', 'phong_ban_id' => 1],
            ['ho_ten' => 'Trần Thị B', 'email' => 'b@example.com', 'so_dien_thoai' => '0987654321', 'phong_ban_id' => 2],
            ['ho_ten' => 'Lê Văn C', 'email' => 'c@example.com', 'so_dien_thoai' => '0111222333', 'phong_ban_id' => 3],
        ]);
    }
}
