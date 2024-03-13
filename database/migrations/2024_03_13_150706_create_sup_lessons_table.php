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
        Schema::create('sup_lessons', function (Blueprint $table) {
            $table->id('supLessonId');
            $table->unsignedBigInteger('lessonId');
            $table->foreign('lessonId')->references('lessonId')->on('lessons');
            $table->string('supTitle');
            $table->string('lessonType');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sup_lessons');
    }
};
