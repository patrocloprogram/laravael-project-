@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>

<head>
    <title>Asistencia de Estudiantes</title>
    <script src="funciones.js"></script>
    <link rel="icon" href="imagen.ico">
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styleregister.css') }}">
</head>
<body style="background-image: url('{{ asset('images/imagen.jpg') }}');" >
    
    <div class="header">
        <header>
            <h1>Bienvenido!</h1>
        </header>
    </div>

    <div class="sidebar">
        <ul>
            <li><a href="Reporte_estadistico.xls">Reporte Estadístico</a></li>
        </ul>
    </div>
    
    <div class="formulario">    
        <h4>Registra tu asistencia</h4>
        <form method="POST" action="{{ route('formulario-asistencia') }}" >
        @csrf
            <input class="forml" type="text" name="nombre_completo" placeholder="Escriba su nombre y apellido" required><br>
            <input class="forml" type="email" name="email" placeholder="Escriba su email" required><br>
            <input class="forml" type="tel" name="telefono" placeholder="Escriba su numero de telefono" required><br>
            <input class="forml" type="text" name="nombre_del_curso" placeholder="Nombre del curso" required><br>
            <input class="botones" type="reset" value="Restablecer Datos" id="DataReset"><br>
            <input class="botones" type="submit" value="Confirmar asistencia" id="BotonEnviar">
    </form>  
</div>

        </form>  
    </div>

    <div class="piedepagina">
        <footer>
            <ul>
                <li>
                    <a href="https://campusvirtual.ucc.edu.co/d2l/loginh/" target="_blank">Campus Virtual</a><br>
                </li>
                <li>
                    <a href="https://opscs.ucc.edu.co/psp/UCNAV/EMPLOYEE/HRMS/?&cmd=login&languageCd=ESP&" target="_blank">Timonel</a>
                </li>
            </ul>
        </footer>
    </div>
</body>

</html>
@endsection