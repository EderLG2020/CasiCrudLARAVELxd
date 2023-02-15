@extends("home.plantilla")

@section('title','Practicante')

@section('MiContenido')

<a href="{{route('form.practicante')}}">Crear</a>
    <ul>
        @foreach($practicante as $prct)
            <li>{{$prct->nombre}}</li>
        @endforeach
    </ul>

    {{$practicante->links()}}

@endsection