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

    public function store(Request $request)
    {
        $practicante = new Practicante();
        $practicante->nombre = $request->nombre;
        $practicante->edad = $request->edad;
        $practicante->correo_electronico = $request->correo_electronico;
        $practicante->fecha_de_nacimiento = $request->fecha_de_nacimiento;
        $practicante->carrera_tecnica = $request->carrera_tecnica;
        $practicante->escuela = $request->escuela;

        $practicante->save();
        return redirect()->route('welcomewel');
    }
    public function miForm()
    {
        return view("home.form");
    }

    public function conocenos($nombre, $alias)
    {

        return view("home.bienvenido", compact('nombre', 'alias'));
    }
}
