<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre', 'descripcion', 'tipo_dispositivo_id', 'usuario_id', 'ubicacion', 'estado'];

    public function tipoDispositivo() {
        return $this->belongsTo(TipoDispositivo::class);
    }

    public function usuario() {
        return $this->belongsTo(Usuario::class);
    }

    public function lecturas() {
        return $this->hasMany(Lectura::class);
    }

    public function comandos() {
        return $this->hasMany(Comando::class);
    }
}
