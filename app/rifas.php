<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rifas extends Model
{   
    protected $fillable = [
        'id',
        'nombre',
        'email',
        'identificador'
    ];
}
