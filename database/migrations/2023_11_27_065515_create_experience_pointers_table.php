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
        Schema::create('experience_pointers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('experience_id');
            $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('cascade');
            $table->index('experience_id');
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_pointers');
    }
};
