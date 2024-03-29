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
        Schema::create('pengalamen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengalaman');
            $table->year('tahun_mulai');
            $table->year('tahun_selesai')->nullable();
            $table->string('kerjaan');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengalamen');
    }
};