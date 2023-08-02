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
        Schema::create('produkproduks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk', 10)->unique();
            $table->string('nama_produk', 25);
            $table->integer('harga');
            $table->integer('stok_awal');
            $table->string('foto_produk', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produkproduks');
    }
};
