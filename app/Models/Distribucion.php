<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribucion extends Model
{
    use HasFactory;

    public function inmuebles()
    {
        return $this->belongsToMany(Inmueble::class, 'inmueble_distribucion');
    }
}
