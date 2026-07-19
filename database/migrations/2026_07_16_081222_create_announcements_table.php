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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('kategori')->default('INFO'); // ex: PERINGATAN BESAR
            $table->string('judul');
            $table->text('deskripsi');
            $table->date('tanggal_pelaksanaan');
            $table->boolean('is_active')->default(true); // Untuk menyalakan/mematikan banner
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
