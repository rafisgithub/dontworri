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
        Schema::create('years', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('univerity_id');
            $table->string('first_year');
            $table->string('second_year');
            $table->string('third_year');
            $table->string('fourth_year');
            $table->foreign('univerity_id')->references('id')->on('university_lists')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('years');

    }
};
