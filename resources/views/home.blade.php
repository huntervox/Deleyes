@extends('material.layouts.dash')

@php
  $role = auth()->user()->role;
@endphp


@section('content')

    @includeWhen($role == 'admin', 'deleyes.admin.admin-home') 

    @includeWhen($role == 'cliente', 'deleyes.cliente.cliente-home')

@endsection