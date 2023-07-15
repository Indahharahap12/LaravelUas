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
        Schema::create('tb_siswa', function (Blueprint $table) {
            $table->increments('siswa_id');
            $table->string('siswa_nama');
            $table->string('siswa_jk');
            $table->string('siswa_ttl');
            $table->string('siswa_alamat');
            $table->string('siswa_nohp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_siswa');
    }
};
