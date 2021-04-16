@extends('layouts.header')
@section('contenido')
    <h2>Bienvenido a la web sobre artículos</h2>
    <a href="{{route('insertar_articulo')}}" title="Añadir articulo">Añadir articulo</a>
    <p>Estos son los articulos publicados.</p>

    @if(Auth::check())
        <button type="button" class="btn btn-primary">{{Auth::user()->name}}</button>
        <a href="/user" title="Usuario">Usuario</a>
        <form method="POST" action="{{route('logout')}}"> 
            @csrf 
            <x-jet-dropdown-link href="{{route('logout')}}"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                <img src="{{url('/img/logout.png')}}" alt="" width="45" height="45">
            </x-jet-dropdown-link>
        </form>
    @endif
    @foreach($articulos as $articulo)
    <div class="card" style="width: 18 rem;">
    <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">
                {{$articulo->titulo}}
            </h5>
            <p class="card-text">{{$articulo->descripcion}}</p>
            <a href="{{ route('un_articulo', ['art'=>$articulo->id])}}" 
            class="btn btn-primary">Ver Articulo</a>
        </div>
        
       
        <!-- <br /> -->
    </div>
    @endforeach
    <p>{{$articulos->render()}}</p>
@endsection