<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function principal() {
        return view('paginas.principal');
    }

public function accesorios() {
    return view('paginas.accesorios');
}

public function ropa() {
    return view('paginas.ropa');
}

public function suplementacion() {
    return view('paginas.suplementacion');
}

public function ubicacion() {
    return view('paginas.ubicacion');
}

public function equipo() {
    return view('paginas.equipo');
}

public function politica() {
    return view('paginas.politica');
}

public function registrar_usuario() {
    return view('paginas.registrar_usuario');
}

public function terminos() {
    return view('paginas.terminos');
}
}