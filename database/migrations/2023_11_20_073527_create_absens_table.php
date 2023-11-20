<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{  /**
    * Run the migrations.
    */
public function up(): void
{
    Schema::create('absens', function (Blueprint $table) {
            $table->id();
            $table->string('nis', );
            $table->string('nama', );
            $table->string('kelas');
            $table->date('tanggal_masuk');
            $table->char('jenis_kelamin', );
            $table->string('jurusan', );
            $table->string('keterangan', );
            $table->timestamps();
    });
}

/**
    * Reverse the migrations.
    */
public function down(): void
{
Schema::dropIfExists('absens');
}

};
