<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nhan_vien_id');
            $table->string('ten_dang_nhap')->unique();
            $table->string('mat_khau');
            $table->enum('vai_tro', ['admin', 'nhanvien']);
            $table->timestamps();

            $table->foreign('nhan_vien_id')->references('id')->on('nhan_viens')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tai_khoans');
    }
};
