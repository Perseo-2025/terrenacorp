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
        Schema::create('ubicacions', function (Blueprint $table) {
            $table->id();
            $table->string('enlace_googlemaps');
            $table->string('calle');
            $table->string('referencia');

           
            //Relacion con la tabla distritos
            $table->unsignedBigInteger('distrito_id'); // Debes definir esta columna para la clave foránea
            $table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('cascade'); // crear la relacion


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubicacions');
    }
};
