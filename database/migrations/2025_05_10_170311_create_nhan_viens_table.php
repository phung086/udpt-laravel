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
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten');
            $table->string('email')->unique();
            $table->string('so_dien_thoai');
            $table->unsignedBigInteger('phong_ban_id');
            $table->timestamps();
            $table->unsignedBigInteger('chi_nhanh_id')->nullable();


            $table->foreign('phong_ban_id')->references('id')->on('phong_bans')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhan_viens');
    }
};
