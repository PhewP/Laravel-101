@extends('layouts.header')
@section('contenido')
<h2>Insertar articulo</h2>
<a href="{{route('articulos')}}" title="Articulos"> Articulos</a>
<!-- Abrimos el formlario que se enviara a la ruta guardar articulo -->
<form action="{{route('guardar_articulo')}}" method="POST">
{{csrf_field()}}
<!-- Para insertar un texto con un name= titulo -->
<label for="titulo">Titulo:</label> <br/>
<input type="text" name="titulo" class="input" value=""> <br/><br/>
<!-- Para insertar un texto con un name descripcion -->
<label for="descripcion">Descripcion:</label> <br/>
<textarea name="descripcion" rows="5" class="form-control"></textarea>
<br/><br/>
<!-- Para insertar un texto con un name cuerpo -->
<label for="cuerpo">Cuerpo:</label><br/>
<textarea name="cuerpo" rows="8" class="form-control"></textarea>
<br /> <br />
<button type="submit" class="btn btn-primary">Crear Articulo</button>
</form>
@endsection