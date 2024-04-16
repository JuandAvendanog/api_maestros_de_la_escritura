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
        Schema::table('players_progress', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('level_id')->references('id')->on('levels');
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('level_id')->references('id')->on('levels');
        });

        Schema::table('attempts_level', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('level_id')->references('id')->on('levels');
        });

        Schema::table('attempts_question', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('players_progress', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['level_id']);
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign(['level_id']);
        });

        Schema::table('attempts_level', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['level_id']);
        });

        Schema::table('attempts_question', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['question_id']);
        });
        
    }
};
