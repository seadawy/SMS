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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id('lessonId');
            $table->string('lessonTitle');
            $table->unsignedBigInteger('courseId');
            $table->foreign('courseId')->references('courseId')->on('courses');
            $table->unsignedBigInteger('createdBy');
            $table->foreign('createdBy')->references('userId')->on('staff');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
