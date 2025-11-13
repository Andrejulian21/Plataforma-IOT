<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variable extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre', 'unidad', 'rango_min', 'rango_max'];

    public function lecturas() {
        return $this->hasMany(Lectura::class);
    }
}

