<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Hola soy show </p>

</body>

</html>

@extends('layouts.plantilla')
@section('TituloPage', 'Crud xd')

@section('sidebar')
    {{-- feliz --}}
    <p>Blaz blaz</p>
@stop

@section('content')
    <p>XD: <?php echo $cursitoxd; ?> ,<?php echo $categoria; ?>  </p>
    <p>K tal papu :v</p>
@stop
