<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatusUnidades extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'marca',
        'autobus',
        'ubicacion',
        'estatus',
        'descripcion',
        'diasfr',
        'descripcionfalla'

    ];

}
