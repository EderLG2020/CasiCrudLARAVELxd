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

        return view('curso.create');
    }

    public function show($cursitoxd, $categoria)
    {
        // return view('curso.show', ['cursitoxd' => $cursitoxd, 'categoria' => $categoria]);
        return view('curso.show', compact('cursitoxd', 'categoria'));
    }
}
