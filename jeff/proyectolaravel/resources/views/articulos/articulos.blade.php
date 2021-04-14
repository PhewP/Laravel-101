@extends('layouts.header')
@section('contenido')
    <h2>Bienvenido a la web sobre artículos</h2>
    <a href="{{route('insertar_articulo')}}" title="Añadir articulo">Añadir articulo</a>
    <p>Estos son los articulos publicados.</p>
    @foreach($articulos as $articulo)
        <a href="{{ route('un_articulo', ['art'=>$articulo->id])}}" title="Ver articulo">
            <h2>{{$articulo->titulo}}</h2>
        </a>
        <p>{{$articulo->descripcion}}</p>
        <br />
    @endforeach
@endsection