<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CargadorPorContenedor;
class CargadorPorContenedorController extends Controller
{
    public function index()
    {
        $carga_contenedores = CargadorPorContenedor::all();
        return view('carga_contenedor.index')->with('carga_contenedores', $carga_contenedores);
    }
}