<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class PhongBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phong_bans')->insert([
            ['ten_phong_ban' => 'Kế toán'],
            ['ten_phong_ban' => 'Nhân sự'],
            ['ten_phong_ban' => 'Kỹ thuật'],
        ]);
    }
}
