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
        Schema::create('cham_congs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nhan_vien_id');
            $table->date('ngay_cham');
            $table->time('gio_vao')->nullable();
            $table->time('gio_ra')->nullable();
            $table->timestamps();

            $table->foreign('nhan_vien_id')->references('id')->on('nhan_viens')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cham_congs');
    }
};
