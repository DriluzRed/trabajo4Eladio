<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargadorPorContenedor extends Model
{
    use HasFactory;
    protected $table = 'cargador_por_contenedor';

    public function cargamento()
    {
        return $this->belongsTo(Cargamento::class);
    }

    public function contenedor()
    {
        return $this->belongsTo(Contenedor::class);
    }
}
