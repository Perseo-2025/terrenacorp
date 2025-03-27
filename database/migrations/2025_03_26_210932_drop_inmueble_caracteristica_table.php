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
        Schema::dropIfExists('inmueble_caracteristica');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('inmueble_caracteristica', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inmueble_id');
            $table->unsignedBigInteger('caracteristica_id');
            $table->timestamps();
        });
    }
};
