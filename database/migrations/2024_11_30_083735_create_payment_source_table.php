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
        Schema::create('payment_source', function (Blueprint $table) {
            $table->id();
            $table->string('source_name');
            $table->string('keys');
            $table->string('endpoint_url');
            $table->string('success_url');
            $table->string('cancel_url');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_source');
    }
};
