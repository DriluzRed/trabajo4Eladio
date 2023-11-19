@extends('layouts.app')
<div class="container">
    <h1>Eladio Fernandez</h1>
    <div class="card">
        <div class="card-header">
            <h2>Conntrol de cargamento</h2>
        </div>
        <div class="card-body">
            <img src="{{asset('img/DER.jpeg')}}" alt="aca va la imagen del DER" class="img-fluid" style="max-width: 100%; height: auto;">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2>Modulos</h2>
        </div>
        <div class="card-body">
           <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Cargamento</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{route('cargamento.index')}}" class="btn btn-primary">Ir al modulo</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Contenedor</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{route('contenedor.index')}}" class="btn btn-primary">Ir al modulo</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Cargamento por Contenedor</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{route('carga_contenedor.index')}}" class="btn btn-primary">Ir al modulo</a>
                    </div>
                </div>
            </div>
           </div>
        </div>
</div>