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
        Schema::create('lesson_history', function (Blueprint $table) {
            $table->id('historyId');
            $table->unsignedBigInteger('studentId');
            $table->foreign('studentId')->references('studentId')->on('students');
            $table->unsignedBigInteger('suplessonId');
            $table->foreign('suplessonId')->references('supLessonId')->on('sup_lessons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_history');
    }
};
