<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financiero extends Model
{
    use HasFactory;

    public function inmueble()
{
    return $this->belongsTo(Inmueble::class);
}
}
