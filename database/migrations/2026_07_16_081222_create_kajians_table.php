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
        Schema::create('kajians', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // ex: Kajian Tafsir Al-Qur'an
            $table->string('ustadz'); // ex: Ust. Abdullah Hakim
            $table->string('waktu'); // ex: Setiap Ahad • Ba'da Subuh
            $table->string('lokasi'); // ex: Ruang Utama
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kajians');
    }
};
