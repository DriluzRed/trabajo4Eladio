@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('home') }}" class="btn btn-secondary">Volver atrás</a>
        </div>
        
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID del contenedor</th>
                        <th>Chapa del cargamento</th>
                        <th>Identificador del contenedor</th>
                        <th>Cantidad Toneladas</th>
                        <th>Activo</th>
                        <th>Origen</th>
                        <th>Destino</th>
                    </tr>
                </thead>
                <tbody id="tablaRegistros">
                    @foreach ($carga_contenedores as $carga_contenedor)
                        <tr>
                            <td>{{ $carga_contenedor->id }}</td>
                            <td>{{ $carga_contenedor->contenedor_id }}</td>
                            <td>{{ $carga_contenedor->cargamento_id }}</td>
                            <td>{{ $carga_contenedor->contenedor->identificador }}</td>
                            <td>{{ $carga_contenedor->toneladas }}</td>
                            <td>
                                <span class="badge {{ $carga_contenedor->activo ? 'bg-success text-light' : 'bg-danger text-light' }}">
                                    {{ $carga_contenedor->activo ? 'Activo' : 'Inactivo' }}
                                </span>
                            </td>
                            <td>{{ $carga_contenedor->origen }}</td>
                            <td>{{ $carga_contenedor->destino }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
