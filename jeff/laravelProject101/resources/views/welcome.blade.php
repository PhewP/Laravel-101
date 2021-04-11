@extends('layouts.header')
@section('contenido')
        <h2>Programacion Web</h2>
        @if (is_null ($nombre))
        <h1>Hola persona anónima</h1>
        @else
        <h1>Bienvenido {{$nombre}}</h1>
        @endif
@endsection
