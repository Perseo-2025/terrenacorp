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
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('area');
            $table->string('fondo');
            $table->string('frente');
            $table->string('derecho');
            $table->string('izquierdo');
            $table->string('construida');
            $table->string('piso');
            $table->string('wc');
            $table->string('ambiente');
            $table->string('dormitorio');
            $table->string('cochera');

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
        Schema::dropIfExists('areas');
    }
};
