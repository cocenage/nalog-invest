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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('title');
            $table->string('description');
            $table->string('image2');
            $table->string('name2');
            $table->string('title2');
            $table->string('description2');
            $table->string('image3');
            $table->string('name3');
            $table->string('title3');
            $table->string('description3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
