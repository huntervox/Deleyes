@extends('material.layouts.dash') 

@section('content')
<div class="col-md-12">
    @component('components.portlet', ['icon' => 'fa fa-pie-chart', 'title' => 'Servicio crear credito'])

    <div id="app">
        <form method="POST" action="{{ route('crearCredito') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
              <label for="suceso" class="col-md-4 col-form-label text-md-right">{{ __('Suceso') }}</label>
              <div class="col-md-6">
                <input id="suceso" type="text" class="form-control{{ $errors->has('suceso') ? ' is-invalid' : '' }}" name="suceso" 
                  value="{{ old('suceso') }}" required autofocus>

                @if ($errors->has('suceso'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('suceso') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="fecha" class="col-md-4 col-form-label text-md-right">{{ __('Fecha') }}</label>
              <div class="col-md-6">
                <input id="fecha" type="date" class="form-control{{ $errors->has('fecha') ? ' is-invalid' : '' }}" name="fecha" value="{{ old('fecha') }}" required autofocus>
                @if ($errors->has('fecha'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('fecha') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="soporte" class="col-md-4 col-form-label text-md-right">{{ __('Soporte') }}</label>

                <div class="col-md-6">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="input-group input-large">
                          <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                              <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                          <span class="fileinput-filename"> </span>
                          </div>
                          <span class="input-group-addon btn default btn-file">
                              <span class="fileinput-new"> Select file </span>
                              <span class="fileinput-exists"> Change </span>
                              <input id="soporte" type="file"  name="soporte" value="{{ old('soporte') }}" required> </span>
                          <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                      </div>
                  </div>

                  @if ($errors->has('soporte'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('soporte') }}</strong>
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
<link href="/assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" /> 

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />




@endpush

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