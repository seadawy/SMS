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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id('invoiceId');
            $table->unsignedBigInteger('parentId');
            $table->foreign('parentId')->references('parentId')->on('parents');
            $table->unsignedBigInteger('cardId');
            $table->foreign('cardId')->references('cardId')->on('payment_card');
            $table->unsignedBigInteger('courseId');
            $table->foreign('courseId')->references('courseId')->on('courses');
            $table->string('method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
