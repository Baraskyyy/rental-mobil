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
        Schema::create('data_mobils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('harga_tanpa_sopir');
            $table->string('harga_dengan_sopir');
            $table->string('deskripsi');
            $table->string('gambar')->nullable();
            $table->enum('status', ['tersedia', 'tidak-tersedia', 'dalam_perbaikan']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_mobils');
    }
};