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
        Schema::create('student_uniclass_enroll', function (Blueprint $table) {
            
            $table->foreignId('student_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('uniclass_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('student_uniclass_enroll');
    }
};
