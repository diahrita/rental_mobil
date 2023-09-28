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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_mobil');
            $table->binary('foto_ktp');
            $table->date('tanggal_sewa');
            $table->date('tanggal_kembali');
            $table->integer('total_harga_sewa');
            $table->enum('metode_pembayaran', ['cash', 'm-banking', 'e-wallet']);
 
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_mobil')->references('id')->on('mobils');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
