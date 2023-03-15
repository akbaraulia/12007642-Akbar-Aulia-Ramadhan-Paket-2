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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('isi_laporan');
            $table->date('tgl_pengaduan');
            $table->integer('nik');
            $table->foreign('nik')->references('nik')->on('users');
            $table->string('foto');

            $table->enum('status' , ['pengajuan', 'proses', 'selesai'])->default('pengajuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
