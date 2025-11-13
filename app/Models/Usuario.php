<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre', 'email', 'contrasena'];

    public function dispositivos() {
        return $this->hasMany(Dispositivo::class);
    }
}

