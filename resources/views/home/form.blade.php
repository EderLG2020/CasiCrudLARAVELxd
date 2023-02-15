@extends("home.plantilla")

@section('title','Practicante')

@section('MiContenido')

<h1>FORMULARIO</h1>

<form action="{{route('crear.practicante')}}" method="post">

    @csrf

    <label>
        Nombre <input type="text" name="nombre">
    </label>
    <br>
    <label>
        edad <input type="number" name="edad">
    </label>
    <br>

        <label>
        correo_electronico <input type="email" name="correo_electronico">
    </label>
    <br>

        <label>
        fecha_de_nacimiento <input type="date" name="fecha_de_nacimiento">
    </label>
    <br>

        <label>
        carrera_tecnica <input type="text" name="carrera_tecnica">
    </label>
    <br>
        <label>
        escuela <input type="text" name="escuela">
    </label>
    <br>

<button type="submit">Enviar</button>

</form>

@endsection


