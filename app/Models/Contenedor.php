<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenedor extends Model
{
    use HasFactory;

    protected $table = 'contenedores';
    protected $fillable = ['id', 'nombre', 'capacidad', 'carga_controlada'];
    
    public function cargadorPorContenedor()
    {
        return $this->hasMany(CargadorPorContenedor::class);
    }
}
