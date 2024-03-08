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
        Schema::create('phones_participants', function (Blueprint $table) {
            $table->bigIncrements('id'); //tipo unsignedBigInteger
            $table->unsignedBigInteger('users_id'); //foreignKey
            $table->string('phone');
            $table->boolean('is_whatzapp');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones_participants');
    }
};
