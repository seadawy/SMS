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
        Schema::create('messages', function (Blueprint $table) {
            $table->id('messageId');
            $table->unsignedBigInteger('chatId');
            $table->foreign('chatId')->references('chatId')->on('chat');
            $table->unsignedBigInteger('senderId');
            $table->foreign('senderId')->references('participantId')->on('participant_id');
            $table->string('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
