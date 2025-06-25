<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuan_surats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('jenis_surat_id')->constrained()->onDelete('cascade');
            $table->string('nomor_surat')->nullable();
            $table->date('tanggal_pengajuan')->default(now());
            $table->text('keperluan');
            $table->string('file_pendukung')->nullable();
            $table->string('file_surat_jadi')->nullable();
            $table->enum('status_kaprodi', ['Proses', 'Disetujui', 'Ditolak'])->default('Proses');
            $table->enum('status_lektor', ['Proses', 'Disetujui', 'Ditolak'])->default('Proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_surats');
    }
};
