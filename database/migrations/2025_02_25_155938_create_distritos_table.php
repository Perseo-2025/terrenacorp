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
        Schema::create('distritos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');

            // Relacion con la tabla provincias
            $table->unsignedBigInteger('provincia_id'); // Debes definir esta columna para la clave foránea
            $table->foreign('provincia_id')->references('id')->on('provincias')->onDelete('cascade'); // crear la relacion

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distritos');
    }
};
