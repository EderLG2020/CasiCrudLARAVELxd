<?php

namespace App\Http\Controllers;

use App\Models\Practicante;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function principal()
    // {
    //     return view('home.bienvenido');
    // }
    public function Base()
    {
        $practicante = Practicante::paginate();
        return view("home.base", compact('practicante'));
    }

    public function contacto()
    {
        return "Hola de contacto";
    }

    public function conocenos($nombre, $alias)
    {

        return view("home.bienvenido", compact('nombre', 'alias'));
    }
}
