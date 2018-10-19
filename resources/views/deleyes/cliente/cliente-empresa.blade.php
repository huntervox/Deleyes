@extends('material.layouts.dash') 

@section('content')
<div class="col-md-12">
    @component('components.portlet', ['icon' => 'fa fa-pie-chart', 'title' => 'Servicio de crear empresa'])

    <div id="app">
        <form method="POST" action="{{ route('crearEmpresa') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombreEmpresa" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="nombreEmpresa" type="text" class="form-control{{ $errors->has('nombreEmpresa') ? ' is-invalid' : '' }}" name="nombreEmpresa" 
                                  value="{{ old('nombreEmpresa') }}" required autofocus>

                                @if ($errors->has('nombreEmpresa'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombreEmpresa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipoEmpresa" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de empresa') }}</label>

                            <div class="col-md-2">

                                <select id="tipoEmpresa"  class="bs-select form-control{{ $errors->has('tipoEmpresa') ? ' is-invalid' : '' }}" name="tipoEmpresa" value="{{ old('tipoEmpresa') }}" required autofocus>
                                    <option>SAS</option>
                                    <option>SA</option>
                                    <option>LTDA</option>
                                </select>
                                
                                @if ($errors->has('tipoEmpresa'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipoEmpresa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="numAccionistas" class="col-md-4 col-form-label text-md-right">{{ __('Número de accionistas') }}</label>

                            <div class="col-md-6">
                                <input id="numAccionistas" type="text" class="form-control{{ $errors->has('numAccionistas') ? ' is-invalid' : '' }}" name="numAccionistas" value="{{ old('numAccionistas') }}" required autofocus>

                                @if ($errors->has('numAccionistas'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numAccionistas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="capital" class="col-md-4 col-form-label text-md-right">{{ __('Monto capital') }}</label>

                            <div class="col-md-6">
                                <input id="capital" type="text" class="form-control{{ $errors->has('capital') ? ' is-invalid' : '' }}" name="capital" value="{{ old('capital') }}" required>

                                @if ($errors->has('capital'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('capital') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="departamento" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>

                            <div class="col-md-6">
                                <input id="departamento" type="text" class="form-control{{ $errors->has('departamento') ? ' is-invalid' : '' }}" name="departamento" 
                                  value="{{ old('departamento') }}" required autofocus>

                                @if ($errors->has('departamento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('departamento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ciudad" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

                            <div class="col-md-6">
                                <input id="ciudad" type="text" class="form-control{{ $errors->has('ciudad') ? ' is-invalid' : '' }}" name="ciudad" 
                                  value="{{ old('ciudad') }}" required autofocus>

                                @if ($errors->has('ciudad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ciudad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear') }}
                                </button>
                            </div>
                        </div>
        </form>

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