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
        Schema::create('file_upload', function (Blueprint $table) {
            $table->id('fileId');
            $table->string('fileTitle');
            $table->unsignedBigInteger('lessonId');
            $table->foreign('lessonId')->references('lessonId')->on('lessons');
            $table->unsignedBigInteger('ownerId');
            $table->foreign('ownerId')->references('studentId')->on('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_upload');
    }
};
