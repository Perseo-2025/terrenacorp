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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('cod_contribuyente');
            $table->binary('ficha');
            $table->binary('luz');
            $table->binary('agua');
            $table->binary('parametros');
            $table->binary('planos');

            // Relacion con la tabla inmuebles
            $table->unsignedBigInteger('inmueble_id'); // Debes definir esta columna para la clave foránea
            $table->foreign('inmueble_id')->references('id')->on('inmuebles')->onDelete('cascade'); // crear la relacion

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
