@extends("home.plantilla")

@section('title','pagina de ' .$nombre)

@section('MiContenido')
    <h1>Hola que tal</h1>
    <p>Esta es mi primera vez hablando</p>
    <p>Bueno no es la primera vez que hablo no?</p>
    <p>jajaja xd</p>
    <pre>                                    {{$alias}}</pre>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/mCdA4bJAGGk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
@endsection