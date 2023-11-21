@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylehome.css') }}">
    <script> src="./funciones.js" </script>
    <title>Registro de usuario</title>
</head>
<body>
    <header class="header">
        <h2>Confirma tu usuario</h2>
    </header>
    <article>
        <form class="form" action="{{ route('formulario-asistencia') }}" method="post">
        @csrf
            <input class="cuadro" type="text" placeholder="Digite su ID" required>
            <input class="boton" type="submit" value="Acceder" >
        </form>
    </article>
</body>
</html>
@endsection