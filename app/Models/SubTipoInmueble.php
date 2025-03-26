<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTipoInmueble extends Model
{
    use HasFactory;

    protected $table = 'sub_tipo_inmuebles';
    protected $fillable = ['nombre', 'tipo_inmueble_id'];

    public function tipo()
    {
        return $this->belongsTo(TipoInmueble::class, 'tipo_inmueble_id');
    }
}
