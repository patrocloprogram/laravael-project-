@extends('layouts.app')

@section('content')
<div class="container">

<div class="alert alert-success" role="alert">
    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}

    @endif
</div>

<a href="{{ url('estudiante/create') }}" class="btn btn-success" >Registrar nueva asistencia</a><br><br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre completo</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Nombre del curso</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $estudiante)
        <tr>
            <td>{{ $estudiante->id }}</td>
            <td>{{ $estudiante->nombre_completo }}</td>
            <td>{{ $estudiante->email }}</td>
            <td>{{ $estudiante->telefono }}</td>
            <td>{{ $estudiante->nombre_del_curso }}</td>
            <td> 
                <a href="{{ url('/estudiante/'.$estudiante->id.'/edit') }}" class="btn btn-warning" >Editar</a>
                
                |
                <form action="{{ url('/estudiante/'.$estudiante->id )}}" class="d-inline" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Desea borrar?')" value="Borrar">
                </form> </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection