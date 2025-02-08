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
        Schema::create('uniclasses', function (Blueprint $table) {
            $table->id();
            $archived = $table->boolean('archived')->default(false);
            $table->string('class_name');
            $table->string('code');
            $table->string('description');
            $table->string('section');
            $table->string('class_type');
            $table->string('schedule');
            $table->string('semester');
            $table->string('room_number');
            $table->foreignId('teacher_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uniclasses');
    }
};
