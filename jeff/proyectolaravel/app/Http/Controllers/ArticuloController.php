<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NuevoArticuloRequest;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function index() {
        $articulos = Articulo::orderBy('id', 'desc')->paginate(2);
        return view('articulos.articulos')->with(['articulos' => $articulos]);
    }

    public function nuevo() {
        return view('articulos.nuevo');
    }

    public function guardar(NuevoArticuloRequest $request) {
        $art = Articulo::Create($request->only('titulo', 'descripcion', 'cuerpo'));
        return redirect()->route('un_articulo', ['art'=>$art->id]);
    }

    public function mostrar_articulo(Articulo $art) {
        return view('articulos.mostrar_articulo')->with(['articulo'=>$art]);
    }
}
