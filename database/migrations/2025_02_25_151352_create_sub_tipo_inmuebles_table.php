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
        Schema::create('sub_tipo_inmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');

            // Relacion con la tabla tipo_inmuebles
            $table->unsignedBigInteger('tipo_inmueble_id'); // Debes definir esta columna para la clave foránea
            $table->foreign('tipo_inmueble_id')->references('id')->on('tipo_inmuebles')->onDelete('cascade'); // crear la relacion

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_tipo_inmuebles');
    }
};
