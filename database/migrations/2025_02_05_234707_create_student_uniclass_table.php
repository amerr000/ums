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
        Schema::create('student_uniclass', function (Blueprint $table) {
            $table->foreignId('student_id')->constrained();
            $table->foreignId('uniclass_id')->constrained();
            $table->boolean('status');
            $table->string('date');
            $table->string('absence_cause');
            $table->timestamps();

            // Composite primary key (student_id and uniclass_id together)
            $table->primary(['student_id', 'uniclass_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_uniclass');
    }
};
