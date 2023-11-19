<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargamento;
class CargamentoController extends Controller
{
    public function index()
    {
        $cargamentos = Cargamento::all();
        return view('cargamento.index')->with('cargamentos', $cargamentos);
    }

    public function buscar(Request $request)
    {
        $carga = $request->input('carga');
        $cargamentosFiltrados = Cargamento::with('cargadorPorContenedor')
            ->where('nombre', 'LIKE', "%$carga%")
            ->get();

        return response()->json($cargamentosFiltrados);
    }
}
