<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NghiPhepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nghi_pheps')->insert([
            ['nhan_vien_id' => 1, 'so_ngay' => 2],
            ['nhan_vien_id' => 2, 'so_ngay' => 0],
        ]);
    }
}
