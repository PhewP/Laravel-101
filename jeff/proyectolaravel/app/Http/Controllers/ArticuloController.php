<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NuevoArticuloRequest;

class ArticuloController extends Controller
{
    public function index() {
        return view('articulos.articulos');
    }

    public function nuevo() {
        return view('articulos.nuevo');
    }

    public function guardar(NuevoArticuloRequest $request) {

    }
}
