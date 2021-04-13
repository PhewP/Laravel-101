<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index() {
        return view('articulos.articulos');
    }

    public function nuevo() {
        return view('articulos.nuevo');
    }
}
