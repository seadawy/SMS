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
        Schema::create('students', function (Blueprint $table) {
            $table->id('studentId');
            $table->string('studentName');
            $table->string('email');
            $table->string('phone');
            $table->string('profileAvatar');
            $table->string('password');
            $table->unsignedBigInteger('classId');
            $table->foreign('classId')->references('classId')->on('classes');
            $table->unsignedBigInteger('parentId');
            $table->foreign('parentId')->references('parentId')->on('parents');
            $table->integer('isActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
