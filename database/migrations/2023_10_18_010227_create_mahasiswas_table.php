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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('npm')->primary(); //(primary key)
            $table->string('nama'); // kolom nama harus string
            $table->string('jurusan'); // kolom jurusan harus string
            $table->unsignedBigInteger('nip_dosen'); 
            $table->foreign('nip_dosen')->references('nip')->on('dosen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
