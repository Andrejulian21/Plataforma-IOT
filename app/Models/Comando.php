<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comando extends Model
{
    public $timestamps = false;
    protected $fillable = ['dispositivo_id', 'nombre', 'timestamp', 'resultado'];

    public function dispositivo() {
        return $this->belongsTo(Dispositivo::class);
    }
}
