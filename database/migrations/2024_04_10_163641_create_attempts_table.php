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
        Schema::create('attempts_level', function (Blueprint $table) {
            $table->id();
            $table->integer('attempts');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('level_id');
            $table->timestamps();
        });

        Schema::create('attempts_question', function (Blueprint $table) {
            $table->id();
            $table->integer('attempts');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('question_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attempts');
    }
};
