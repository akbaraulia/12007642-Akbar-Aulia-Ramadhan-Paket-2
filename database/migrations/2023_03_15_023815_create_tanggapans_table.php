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
        Schema::create('tanggapans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pengaduan');
            $table->foreign('id_pengaduan')->references('id')->on('pengaduans');
            $table->date('tgl_tanggapan');
            $table->text('tanggapan');
            $table->unsignedBigInteger('id_petugas');
            $table->foreign('id_petugas')->references('id')->on('users');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapans');
    }
};
