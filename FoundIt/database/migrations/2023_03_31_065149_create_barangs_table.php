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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('deskripsi');
            $table->text('kronologi');
            $table->string('lokasi')->nullable();
            $table->boolean('is_hilang');
            $table->boolean('is_claim');
            $table->boolean('is_hadiah')->nullable();
            $table->boolean('is_verif');
            $table->boolean('is_tolak');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
