<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function principal()
    // {
    //     return view('home.bienvenido');
    // }

    public function contacto()
    {
        return "Hola de contacto";
    }

    public function conocenos($nombre, $alias)
    {
        return view("home.bienvenido", compact('nombre', 'alias'));
    }
}
