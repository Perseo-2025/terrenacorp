<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    use HasFactory;

    protected $table = 'operacions'; 
    protected $fillable = ['tipo'];

    public function inmuebles()
    {
        return $this->hasMany(Inmueble::class);
    }
}
