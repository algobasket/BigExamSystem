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
        Schema::create('course_materials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_category_id');
            $table->unsignedBigInteger('course_sub_category_id');
            $table->unsignedBigInteger('study_packages_id');
            $table->string('video_file');
            $table->string('pdf_file'); 
            $table->string('image_file');
            $table->unsignedBigInteger('status');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_materials');
    }
};