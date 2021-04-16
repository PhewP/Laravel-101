@extends('layouts.header')
@section('contenido')
    <a href="{{route('articulos')}}" title="Ver todos los articulos">Ver todos los articulos</a>
    <p>Este es el articulo</p>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$articulo->titulo}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Descripcion</h6>
            <p class="card-text">{{$articulo->descripcion}}</p>
            <h6 class="card-subtitle mb-2 text-muted">Cuerpo</h6>
            <p class="card-text">{{$articulo->cuerpo}}</p>
        </div>
    </div>
@endsection