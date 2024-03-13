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
        Schema::create('test_history', function (Blueprint $table) {
            $table->id('testHistoryId');
            $table->unsignedBigInteger('studentId');
            $table->foreign('studentId')->references('studentId')->on('students');
            $table->unsignedBigInteger('testId');
            $table->foreign('testId')->references('lessonTestId')->on('lesson_test');
            $table->decimal('degree');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_history');
    }
};
