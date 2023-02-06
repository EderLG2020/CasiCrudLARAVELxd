<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {

        return "Hola :D";
    }

    public function show($cursitoxd, $categoria)
    {
        return "Hola: $cursitoxd, de la categoria $categoria";
    }
}
