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
        Schema::create('assignment_lesson', function (Blueprint $table) {
            $table->id('lessonAssignmentId');
            $table->string('fileTitle');
            $table->string('file');
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
        Schema::dropIfExists('assignment_lesson');
    }
};
