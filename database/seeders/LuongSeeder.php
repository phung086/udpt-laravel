<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LuongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('luongs')->insert([
            ['nhan_vien_id' => 1, 'tong_luong' => 15000000, 'thang' => '05', 'nam' => '2025'],
            ['nhan_vien_id' => 2, 'tong_luong' => 12000000, 'thang' => '05', 'nam' => '2025'],
            ['nhan_vien_id' => 3, 'tong_luong' => 13000000, 'thang' => '05', 'nam' => '2025'],
        ]);
    }
}
