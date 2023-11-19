@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="{{route('home')}}" class="btn btn-secondary">Volver atrás</a>
        </div>
        
        <div class="card-body">
            <div class="mb-3">
                <label for="carga" class="form-label">Buscar por Cargamento:</label>
                <input type="text" class="form-control" id="carga">
            </div>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Carga Controlada</th>
                        <th>Cantidad de Cargas por Contenedor</th>

                    </tr>
                </thead>
                <tbody id="tablaRegistros">
                    @foreach ($cargamentos as $carga)
                        <tr>
                            <td>{{$carga->nombre}}</td>
                            <td>
                                <span class="badge {{ $carga->carga_controlada ? 'bg-success text-light' : 'bg-danger text-light' }}">
                                    {{ $carga->carga_controlada ? 'Si' : 'No' }}
                                </span>
                            </td>
                            <td>{{$carga->cargadorPorContenedor->count()}}</td>

                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>

<script>
$(document).ready(function () {
    $('#carga').on('input', buscarRegistros);

    function buscarRegistros() {
        var carga = $('#carga').val().toLowerCase();

        $.get('/buscarCargamento', { carga: carga }, function (registrosFiltrados) {
            var tablaRegistros = $('#tablaRegistros');
            tablaRegistros.empty();

            $.each(registrosFiltrados, function (index, carga) {
                var nuevaFila = '<tr>' +
                    '<td>' + carga.nombre + '</td>' +
                    '<td>' +
                    '<span class="badge ' + (carga.carga_controlada ? 'bg-success text-light' : 'bg-danger text-light') + '">' +
                    (carga.carga_controlada ? 'Si' : 'No') +
                    '</span>' +
                    '</td>' +
                    '<td>' + (carga.cargador_por_contenedor ? carga.cargador_por_contenedor.length : 0) + '</td>' +
                    '</tr>';
                tablaRegistros.append(nuevaFila);
            });
        });
    }
});

</script>
@endsection