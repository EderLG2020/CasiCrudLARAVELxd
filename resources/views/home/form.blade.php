@extends("home.plantilla")

@section('title','Practicante')

@section('MiContenido')

<h1>FORMULARIO</h1>

<form action="{{route('crear.practicante')}}" method="post">

    @csrf

    <label>
        Nombre <input type="text" name="nombre" value="{{old('nombre')}}">
    </label><br>
    @error('nombre')
        <small class="messageError">*{{$message}}</small>
        <br>
    @enderror

    <br><label>
        edad <input type="number" name="edad" value="{{old('edad')}}">
    </label><br>
    @error('edad')
        <small class="messageError">*{{$message}}</small>
        <br>
    @enderror

    <br>
        <label>
        correo_electronico <input type="email" name="correo_electronico" value="{{old('correo_electronico')}}">
    </label><br>
    @error('correo_electronico')
        <small class="messageError">*{{$message}}</small>
        <br>
    @enderror

    <br>

        <label>
        fecha_de_nacimiento <input type="date" name="fecha_de_nacimiento" value="{{old('fecha_de_nacimiento')}}">
    </label>
    <br>
     @error('fecha_de_nacimiento')
        <small class="messageError">*{{$message}}</small>
        <br>
    @enderror<br>

        <label>
        carrera_tecnica <input type="text" name="carrera_tecnica" value="{{old('carrera_tecnica')}}">
    </label>
    <br>
    @error('carrera_tecnica')
        <small class="messageError">*{{$message}}</small>
        <br>
    @enderror<br>
        <label>
        escuela <input type="text" name="escuela" value="{{old('escuela')}}">
    </label>
    <br>
    @error('escuela')
        <small class="messageError">*{{$message}}</small>
        <br>
    @enderror<br>
    <br><br>

<button class="btn" type="submit">Enviar</button>

</form>

@endsection


