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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('exam_title');
            $table->string('exam_name');
            $table->unsignedBigInteger('exam_duration');
            $table->string('total_questions');
            $table->timestamp('start_time')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('stop_time')->nullable();
            $table->timestamp('stop_date')->nullable(); 
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
