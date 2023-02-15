@extends("home.plantilla")

@section('title','Practicante')
    <script src="https://cdn.tailwindcss.com"></script>

@section('MiContenido')

<a class="Linkxd" href="{{route('form.practicante')}}">Crear</a>
    <ul>
        @foreach($practicante as $prct)
            <li>{{$prct->nombre}}</li>
        @endforeach
    </ul>

    {{$practicante->links()}}

@endsection