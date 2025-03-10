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
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descripcion');
            $table->decimal('comision_venta', 8, 2);
            $table->decimal('comision_alquiler', 8, 2);
            
            
            // Relacion con la tabla owners Propietario
            $table->unsignedBigInteger('owner_id'); // Debes definir esta columna para la clave foránea
            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade'); // crear la relacion
            
            
            //Relacion con la tabla tipologia_inmueble
            $table->unsignedBigInteger('sub_tipo_inmueble_id'); // Debes definir esta columna para la clave foránea
            $table->foreign('sub_tipo_inmueble_id')->references('id')->on('sub_tipo_inmuebles')->onDelete('cascade'); // crear la relacion


            //Realcion con la ubicación 
            $table->unsignedBigInteger('ubicacion_id'); // Debes definir esta columna para la clave foránea
            $table->foreign('ubicacion_id')->references('id')->on('ubicacions')->onDelete('cascade'); // crear la relacion
            

            //Relacion con la tabla operacion
            $table->unsignedBigInteger('operacion_id'); // Debes definir esta columna para la clave foránea
            $table->foreign('operacion_id')->references('id')->on('operacions')->onDelete('cascade'); // crear la relacion
             
            
            //Relacion con la tabla estados
            $table->unsignedBigInteger('estado_id'); // Debes definir esta columna para la clave foránea
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade'); // crear la relacion
            
            
            //Relacion con la tabla divisas
            $table->unsignedBigInteger('divisa_id'); // Debes definir esta columna para la clave foránea
            $table->foreign('divisa_id')->references('id')->on('divisas')->onDelete('cascade'); // crear la relacion
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inmuebles');
    }
};
