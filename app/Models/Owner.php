<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    
    protected $table = 'owners';

    protected $fillable = [
        'name',
        'contact',
        'tipo_documento',
        'numero_documento',
        'telefono_fijo',
        'celular',
        'email',
        'others',
        'status',
        'users_id',
    ];
    public function inmuebles()
    {
        return $this->hasMany(Inmueble::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    
}
