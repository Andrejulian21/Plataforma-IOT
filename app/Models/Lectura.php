<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lectura extends Model
{
    public $timestamps = false;
    protected $fillable = ['dispositivo_id', 'variable_id', 'valor', 'timestamp', 'estado', 'calidad_dato'];

    public function dispositivo() {
        return $this->belongsTo(Dispositivo::class);
    }

    public function variable() {
        return $this->belongsTo(Variable::class);
    }

    public function alerta() {
        return $this->hasOne(Alerta::class);
    }
}
