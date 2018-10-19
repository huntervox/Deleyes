@extends('material.layouts.dash') 

@section('content')
<div class="col-md-12">
    @component('components.portlet', ['icon' => 'fa fa-pie-chart', 'title' => 'Usuarios'])

    <div id="app">
        <h1>Usuarios aceptados</h1>
        <!-- Tabla de usuarios -->
        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="sampleu">
                        <thead>
                            <tr>
                                <th> Nombre </th>
                                <th> D/Tipo </th>
                                <th> Documento </th>
                                <th> Correo </th>
                                <th> Teléfono </th>
                                <th> Rol </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th> Nombre </th>
                                <th> D/Tipo </th>
                                <th> Documento </th>
                                <th> Correo </th>
                                <th> Teléfono </th>
                                <th> Rol </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($usuarios as $a)
                                <tr>
                                    <td>{{$a->nombre}}</td>
                                    <td>{{$a->tipoDocumento}}</td>
                                    <td>{{$a->documento}}</td>
                                    <td>{{$a->email}}</td>
                                    <td>{{$a->telefono}}</td>
                                    <td>{{$a->role}}</td>
                                </tr>
                             @endforeach
                        </tbody>
                    </table>
        </div>

        <h1>Peticiones</h1>
        <!-- Tabla de usuarios -->
        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="sampleu">
                        <thead>
                            <tr>
                                <th> Nombre </th>
                                <th> D/Tipo </th>
                                <th> Documento </th>
                                <th> Correo </th>
                                <th> Teléfono </th>
                                <th> Rol </th>
                                <th> Aceptar</th>
                                <th> Eliminar </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th> Nombre </th>
                                <th> D/Tipo </th>
                                <th> Documento </th>
                                <th> Correo </th>
                                <th> Teléfono </th>
                                <th> Rol </th>
                                <th> Aceptar</th>
                                <th> Eliminar </th>

                            </tr>
                        </tfoot>

                            @foreach($peticiones as $pe)
                                <tr>
                                    <td>{{$pe->nombre}}</td>
                                    <td>{{$pe->tipoDocumento}}</td>
                                    <td>{{$pe->documento}}</td>
                                    <td>{{$pe->email}}</td>
                                    <td>{{$pe->telefono}}</td>
                                    <td>{{$pe->role}}</td>
                                    <td>
                                        <form method="POST" action="{{ route('usuarios.update',$pe->PK_id) }}">
                                            @csrf
                                            {{ method_field('PUT')}}
                                            <button class="btn btn-success" title="Eliminar Usuario">
                                                <span class="glyphicon glyphicon-check"></span>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('usuarios.destroy',$pe->PK_id) }}">
                                            @csrf
                                            {{ method_field('DELETE')}}
                                            <button class="editar-modal btn btn-danger" title="Eliminar Usuario" data-toggle="modal" data-target="#modalBorrar">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                             @endforeach
                        </tbody>
                    </table>
                    <!-- Modal Aceptar 
                    <div class="modal fade" id="modalAceptar" tabindex="-1" role="dialog" aria-labelledby="modalAceptarLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalAceptarLabel">Aceptar Petición</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Está seguro que desea aceptar la petición del usuario {{$pe->nombre}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Aceptar</button>
                            </div>
                            </div>
                        </div>
                        </div>-->
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