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
        Schema::create('tb_ortu', function (Blueprint $table) {
            $table->increments('ortu_id');
            $table->string('ortu_nama');
            $table->string('ortu_ttl');
            $table->string('ortu_alamat');
            $table->string('ortu_nohp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_ortu');
    }
};
