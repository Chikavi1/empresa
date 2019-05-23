<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class incidente extends Model
{
    protected $fillable = [
        'folio', 'email', 'descripcion',
    ];
}
