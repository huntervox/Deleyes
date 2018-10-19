@extends('material.layouts.dash') 

@section('content')
<div class="col-md-12">
    @component('components.portlet', ['icon' => 'fa fa-pie-chart', 'title' => 'Listado de servicios'])

    <div id="app">
        <h1>Empresas del usuario</h1>
        <!-- Tabla de usuarios -->
        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="sampleu">
                        <thead>
                            <tr>
                                <th> Nombre Empresa</th>
                                <th> E/Tipo </th>
                                <th> Accionistas </th>
                                <th> Capital</th>
                                <th> Departamento </th>
                                <th> Ciudad </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th> Nombre Empresa</th>
                                <th> E/Tipo </th>
                                <th> Accionistas </th>
                                <th> Capital</th>
                                <th> Departamento </th>
                                <th> Ciudad </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($empresas as $e)
                                <tr>
                                    <td>{{$e->nombreEmpresa}}</td>
                                    <td>{{$e->tipoEmpresa}}</td>
                                    <td>{{$e->numAccionistas}}</td>
                                    <td>{{$e->capital}}</td>
                                    <td>{{$e->departamento}}</td>
                                    <td>{{$e->ciudad}}</td>
                                </tr>
                             @endforeach
                        </tbody>
                    </table>
        </div>

        <h1>Creditos</h1>
        <!-- Tabla de usuarios -->
        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="sampleu">
                        <thead>
                            <tr>
                                <th> Suceso </th>
                                <th> Fecha </th>
                                <th> Departamento </th>
                                <th> Ciudad </th>
                                <th> Soporte </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th> Suceso </th>
                                <th> Fecha </th>
                                <th> Departamento </th>
                                <th> Ciudad </th>
                                <th> Soporte </th>
                            </tr>
                        </tfoot>
                            @foreach($creditos as $c)
                                <tr>
                                    <td>{{$c->suceso}}</td>
                                    <td>{{$c->fecha}}</td>
                                    <td>{{$c->departamento}}</td>
                                    <td>{{$c->ciudad}}</td>
                                    <td>                                        
                                      <a class="btn btn-info" title="Eliminar Usuario" href="soportes/{{$c->soporte}}" target="_blank">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                      </a></td>
                                </tr>
                             @endforeach
                        </tbody>
                    </table>
        </div>
    </div>

</div>

@endcomponent


@endsection 

@push('styles')
<link rel="stylesheet" href="/assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css">
<link href="/assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" /> @endpush 
@push('functions')

<script src="/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<script>
$( document ).ready(function() {
  // Asociar un evento al botón que muestra la ventana modal
  $('#aceptar-peticion').click(function() {
    $.ajax({
       
    });
  });
});
<script>
@endpush