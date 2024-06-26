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
        Schema::create('transaksi_surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->string("nomor_surat");
            $table->string("tujuan");
            $table->string("tanggal_surat");
            $table->string("keterangan");
            $table->string("perihal");
            $table->string("lampiran")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_surat_keluars');
    }
};
