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
        Schema::create('payment_card', function (Blueprint $table) {
            $table->id('cardId');
            $table->unsignedBigInteger('parentId');
            $table->foreign('parentId')->references('parentId')->on('parents');
            $table->string('cardNumber');
            $table->string('yearEnd');
            $table->string('monthEnd');
            $table->string('cvv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_card');
    }
};
