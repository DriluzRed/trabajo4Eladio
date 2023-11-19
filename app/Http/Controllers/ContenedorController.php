<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contenedor;
class ContenedorController extends Controller
{
    public function index(){
        $contenedores = Contenedor::all();
        return view('contenedor.index')->with('contenedores', $contenedores);
    }
    public function buscar(Request $request)
    {
        $identificador = $request->input('identificador');
        $contenedoresFiltrados = Contenedor::with('cargadorPorContenedor')
            ->where('identificador', 'LIKE', "%$identificador%")
            ->get();

        return response()->json($contenedoresFiltrados);
    }
}
