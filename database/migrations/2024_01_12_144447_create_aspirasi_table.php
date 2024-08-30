<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('aspirasis', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_aspirasi', 50);
            $table->text('aspirasi_usc');
            $table->text('aspirasi_umum');
            $table->string('gambar_kerusakan_usc', 255)->nullable();
            $table->string('gambar_kerusakan_umum', 255)->nullable();
            $table->foreignId('mid')->constrained('mahasiswas')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspirasis');
    }
};
