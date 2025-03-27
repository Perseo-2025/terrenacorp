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
        Schema::create('caracteristica_tipo_inmueble', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('caracteristica_id');
            $table->unsignedBigInteger('tipo_inmueble_id');
            $table->timestamps();
    
            $table->foreign('caracteristica_id')->references('id')->on('caracteristicas')->onDelete('cascade');
            $table->foreign('tipo_inmueble_id')->references('id')->on('tipo_inmuebles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracteristica_tipo_inmueble');
    }
};
