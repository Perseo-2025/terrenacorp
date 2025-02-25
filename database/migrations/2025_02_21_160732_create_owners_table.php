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
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact');
            $table->enum('tipo_documento', ['DNI', 'RUC']);
            $table->string('numero_documento', 15)->unique();
            $table->string('telefono_fijo');
            $table->string('celular');
            $table->string('email');
            $table->enum('status', [1, 0]);//->1: Propietario Activo, 0: Propietario inactivo
            
            //Relacion con los usuarios
            $table->unsignedBigInteger('users_id'); // Debes definir esta columna para la clave foránea
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade'); // crear la relacion
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
