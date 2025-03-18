<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    use HasFactory;

    // En models/Inmueble.php
    public function financiero()
    {
        return $this->hasOne(Financiero::class);
    }

    public function documento()
    {
        return $this->hasOne(Documento::class);
    }

    public function zona()
    {
        return $this->hasOne(Zona::class);
    }

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function operacion()
    {
        return $this->belongsTo(Operacion::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function divisa()
    {
        return $this->belongsTo(Divisa::class);
    }

    public function caracteristicas()
    {
        return $this->belongsToMany(Caracteristica::class, 'inmueble_caracteristica');
    }

    public function distribuciones()
    {
        return $this->belongsToMany(Distribucion::class, 'inmueble_distribucion');
    }

    public function images()
    {
        return $this->hasMany(Images::class);
    }


}
