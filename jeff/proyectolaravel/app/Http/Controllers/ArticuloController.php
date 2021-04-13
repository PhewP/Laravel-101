<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NuevoArticuloRequest;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function index() {
        $articulos = Articulo::all();
        return view('articulos.articulos')->with(['articulos' => $articulos]);
    }

    public function nuevo() {
        return view('articulos.nuevo');
    }

    public function guardar(NuevoArticuloRequest $request) {

    }
}
