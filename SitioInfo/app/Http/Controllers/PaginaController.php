<?php

namespace App\Http\Controllers; /* cada metodo devuelve una de las vistas*/

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function eventos()
    {
        return view('eventos');
    }

    public function registro()
    {
        return view('registro');
    }
}

