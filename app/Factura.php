<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable = [
        'marca', 'modelo', 'year', 'descripcion', 'precio', 'no_serie', 'no_orden'
    ];
}
