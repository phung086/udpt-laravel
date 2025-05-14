<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChamCongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cham_congs')->insert([
            ['nhan_vien_id' => 1, 'ngay_cham' => '2024-05-01'],
            ['nhan_vien_id' => 2, 'ngay_cham' => '2024-05-01'],
            ['nhan_vien_id' => 3, 'ngay_cham' => '2024-05-01'],
        ]);
    }
}