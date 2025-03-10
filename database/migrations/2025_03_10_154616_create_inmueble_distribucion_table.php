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
        Schema::create('inmueble_distribucion', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('inmueble_id');
            $table->foreign('inmueble_id')->references('id')->on('inmuebles')->onDelete('cascade');

            $table->unsignedBigInteger('distribucion_id');
            $table->foreign('distribucion_id')->references('id')->on('distribucions')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inmueble_distribucion');
    }
};
