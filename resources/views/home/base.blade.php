@extends("home.plantilla")

@section('title','Practicante')

@section('MiContenido')
    <ul>
        @foreach($practicante as $prct)
            <li>{{$prct->nombre}}</li>
        @endforeach
    </ul>

    {{$practicante->links()}}

@endsection