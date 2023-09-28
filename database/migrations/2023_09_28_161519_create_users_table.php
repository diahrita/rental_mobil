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
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->char('nama', 100);
                $table->string('email', 100)->nullable();
                $table->string('password', 100);
                $table->string('no_telepon', 100);
                $table->string('alamat', 100);
                $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan', 'Lainnya']);
                $table->string('pekerjaan', 100);

                

                
                $table->timestamps();
            });
            
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
