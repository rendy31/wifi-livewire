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
        Schema::create('akun_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique('akun_mahasiswas');
            $table->string('nama');
            $table->date('tglLahir');
            $table->string('password');
            $table->string('locate_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun_mahasiswas');
    }
};
