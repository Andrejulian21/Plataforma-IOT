<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    public $timestamps = false;
    protected $fillable = ['lectura_id', 'mensaje', 'timestamp', 'nivel'];

    public function lectura() {
        return $this->belongsTo(Lectura::class);
    }
}

