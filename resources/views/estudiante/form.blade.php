

<h1>
        {{$modo}} Estudiante
</h1>

@if(count($errors)>0)
        <div class="alert alert-primary" role="alert">
 <ul>               
                @foreach($errors->all() as $error)
                <li>     {{$error}}   </li>
               @endforeach
</ul>
        </div>       
@endif

<form action="{{ url('/estudiante') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
                <label for="nombre_completo">Nombre Completo </label>
                <input class="form-control" type="text" value="{{  isset($estudiante->nombre_completo)?$estudiante->nombre_completo:old('nombre_completo') }}" name="nombre_completo">
        </div>
        <div class="form-group">
                <label for="email">Email </label>
                <input class="form-control" type="text"  value="{{  isset($estudiante->email)?$estudiante->email:old('email') }}" name="email">
        </div>
        <div class="form-group">
                <label for="telefono">Telefono </label>
                <input class="form-control" type="text"  value="{{  isset($estudiante->telefono)?$estudiante->telefono:old('telefono') }}" name="telefono">
        </div>
        <div class="form-group">
                <label for="nombre_del_curso">Nombre del curso </label>
                <input class="form-control" type="text"  value="{{  isset($estudiante->nombre_del_curso)?$estudiante->nombre_del_curso:old('nombre_del_curso') }}" name="nombre_del_curso">
        </div>
        <div class="form-group">
                <br><input class="btn btn-success" class="form-control" type="submit" value="{{$modo}} datos">
        </div>
        <br><a class="btn btn-primary" href="{{ url('estudiante/') }}">Volver</a>
</form>