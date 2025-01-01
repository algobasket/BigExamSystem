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
        Schema::create('course_sub_category', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id'); // Foreign key column
            $table->unsignedBigInteger('parent_id');     
            $table->string('cat_sub_title');
            $table->string('cat_sub_name');
            $table->timestamps();
            
            // Define the foreign key constraint
            $table->foreign('cat_id')->references('id')->on('course_category')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_sub_category');
    }
};
