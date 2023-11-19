<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargamento extends Model
{
    use HasFactory;
    protected $table = 'cargamentos';
    protected $fillable = ['id', 'nombre', 'carga_controlada'];

    public function cargadorPorContenedor()
    {
        return $this->hasMany('App\Models\CargadorPorContenedor');
    }
}
