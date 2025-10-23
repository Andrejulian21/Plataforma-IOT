<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDispositivo extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre', 'descripcion'];

    public function dispositivos() {
        return $this->hasMany(Dispositivo::class);
    }
}
