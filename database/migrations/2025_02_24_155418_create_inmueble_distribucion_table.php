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

            
            $table->unsignedBigInteger('inmuebles_id'); // Debes definir esta columna para la clave foránea
            $table->foreign('inmuebles_id')->references('id')->on('inmuebles')->onDelete('cascade'); // crear la relacion

            $table->unsignedBigInteger('distribucion_id'); // Debes definir esta columna para la clave foránea
            $table->foreign('distribucion_id')->references('id')->on('distribucions')->onDelete('cascade'); // crear la relacion


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
