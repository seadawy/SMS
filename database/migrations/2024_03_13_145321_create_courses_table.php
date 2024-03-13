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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('courseId');
            $table->string('title');
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('categoryId')->on('categories');
            $table->decimal('price');
            $table->unsignedBigInteger('inClass');
            $table->foreign('inClass')->references('classId')->on('classes');
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
        Schema::dropIfExists('courses');
    }
};
