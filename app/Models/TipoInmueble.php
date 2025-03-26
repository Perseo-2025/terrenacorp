<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoInmueble extends Model
{
    use HasFactory;

    protected $table = 'tipo_inmuebles';
    protected $fillable = ['nombre'];

    public function subtipos()
    {
        return $this->hasMany(SubTipoInmueble::class, 'tipo_inmueble_id');
    }
}
