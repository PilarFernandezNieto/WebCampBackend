<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ponente extends Model
{

    protected $fillable = ['nombre', 'apellido', 'ciudad', 'pais', 'imagen', 'redes', 'areas'];
    protected $table = 'ponentes';
}
