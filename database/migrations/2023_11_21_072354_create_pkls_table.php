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
        Schema::create('pkls', function (Blueprint $table) {
                $table->id();
                $table->string('kelas');
                $table->date('tanggal_masuk');
                $table->unsignedBigInteger('perusahaan_id');
                $table->foreign('perusahaan_id')->references('id')->on('perusahaan');
                $table->unsignedBigInteger('jurusan_id');
                $table->foreign('jurusan_id')->references('id')->on('jurusans');
                $table->unsignedBigInteger('siswa_id');
                $table->foreign('siswa_id')->references('id')->on('siswa');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_pkls');
    }
};
