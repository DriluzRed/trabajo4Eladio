@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('home') }}" class="btn btn-secondary">Volver atrás</a>
        </div>
        
        <div class="card-body">
            <div class="mb-3">
                <label for="nombre" class="form-label">Buscar por identificador:</label>
                <input type="text" class="form-control" id="identificador">
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Identificador</th>
                        <th>Color</th>
                        <th>Activo</th>
                        <th>Toneladas Maximas</th>
                        <th>Cargas</th>
                    </tr>
                </thead>
                <tbody id="tablaRegistros">
                    @foreach ($contenedores as $contenedor)
                        <tr>
                            <td>{{ $contenedor->identificador }}</td>
                            <td>{{ $contenedor->color }}</td>
                            <td>
                                <span class="badge {{ $contenedor->activo ? 'bg-success text-light' : 'bg-danger text-light' }}">
                                    {{ $contenedor->activo ? 'Activo' : 'No Activo' }}
                                </span>
                            </td>
                            <td>{{ $contenedor->toneladas_maximas }}</td>
                            <td>{{$contenedor->cargadorPorContenedor->count()}}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#identificador').on('input', buscarRegistros);

        function buscarRegistros() {
            var identificador = $('#identificador').val().toLowerCase();

            $.get('/buscarContenedor', { identificador: identificador }, function (contenedoresFiltrados) {
                var tablaRegistros = $('#tablaRegistros');
                tablaRegistros.empty();

                $.each(contenedoresFiltrados, function (index, contenedor) {
                    var nuevaFila = '<tr>' +
                        '<td>' + contenedor.identificador + '</td>' +
                        '<td>' + contenedor.color + '</td>' +
                        '<td>' +
                            '<span class="badge ' + (contenedor.activo ? 'bg-success text-light' : 'bg-danger text-light') + '">' +
                                (contenedor.activo ? 'Activo' : 'No Activo') +
                            '</span>' +
                        '</td>' +
                        '<td>' + contenedor.toneladas_maximas + '</td>' +
                        '<td>' + contenedor.cargador_por_contenedor.length + '</td>' +
                        '</tr>';
                    tablaRegistros.append(nuevaFila);
                });
            });
        }
    });
</script>

@endsection