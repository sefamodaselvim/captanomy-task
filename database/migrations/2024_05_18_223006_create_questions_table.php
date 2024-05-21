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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('questions');
            $table->text('text');
            $table->integer('score')->nullable(); // Puan
            $table->unsignedSmallInteger('order')->default(1); // Sıra
            $table->unsignedTinyInteger('type')->default(0); // 0: Kategori, 1: Soru, 2: Cevap
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
