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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->integer('umur')->nullable();
            $table->string('kota')->nullable();
            $table->string('gelar')->nullable();
            $table->string('x')->nullable();
            $table->string('fb')->nullable();
            $table->string('ig')->nullable();
            $table->string('skype')->nullable();
            $table->string('foto')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};