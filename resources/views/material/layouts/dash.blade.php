@extends('layouts.dash')

{{--
  Dash del usuario, los links cambian segun el rol del usuario
--}}
@php
  $role = auth()->user()->role;
@endphp

@section('links')
  
    @includeWhen($role == 'admin', 'deleyes.admin.admin-dash') 

    @includeWhen($role == 'cliente', 'deleyes.cliente.cliente-dash')

  
@endsection



