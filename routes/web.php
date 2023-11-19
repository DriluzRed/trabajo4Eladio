<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContenedorController;
use App\Http\Controllers\CargamentoController;
use App\Http\Controllers\CargadorPorContenedorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('/contenedor', [ContenedorController::class, 'index'])->name('contenedor.index');
Route::get('/cargamento', [CargamentoController::class, 'index'])->name('cargamento.index');
Route::get('/carga_contenedor', [CargadorPorContenedorController::class, 'index'])->name('carga_contenedor.index');

Route::get('/buscarContenedor', [ContenedorController::class, 'buscar'])->name('buscar');
Route::get('/buscarCargamento', [CargamentoController::class, 'buscar'])->name('buscarCargamento');

