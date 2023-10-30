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
        Schema::create('karywan', function (Blueprint $table) {
            $table->string('nama_karyawan');
            $table->text('alamat_karyawan');
            $table->string('nomor_telepon_karyawan', 15);
            $table->string('email_karyawan')->unique(); // Email harus unik
            $table->string('posisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karywan');
    }
};
