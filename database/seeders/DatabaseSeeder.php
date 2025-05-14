<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PhongBanSeeder::class,
            NhanVienSeeder::class,
            ChamCongSeeder::class,
            LuongSeeder::class,
            NghiPhepSeeder::class,
            TaiKhoanSeeder::class,
        ]);
    }
}
