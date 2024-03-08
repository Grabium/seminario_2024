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
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id'); //tipo unsignedBigInteger
            $table->unsignedBigInteger('users_id'); //foreignKey
            $table->integer('old');
            $table->string('email');
            $table->string('parish');
            $table->string('group');
            $table->string('addres');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
