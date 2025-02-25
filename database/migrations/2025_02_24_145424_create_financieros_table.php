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
        Schema::create('financieros', function (Blueprint $table) {
            $table->id();
            $table->double('venta', 8, 2);
            $table->double('alquiler', 8, 2);
            $table->double('mantenimiento', 8, 2);
            $table->double('porc_venta', 8, 2);
            $table->double('porc_alquiler', 8, 2);
            $table->string('otros');
            
            //relacion con los inmuebless
            $table->unsignedBigInteger('inmueble_id');
            $table->foreign('inmueble_id')->references('id')->on('inmuebles')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financieros');
    }
};
