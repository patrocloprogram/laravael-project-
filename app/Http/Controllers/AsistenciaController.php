<?php

namespace App\Http\Controllers;
use App\Models\Asistencia;
use App\Models\estudiante;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function mostrarFormulario()
{
    return view('asistencia.registrar');
}

public function registrarAsistencia(Request $request)
{
    $request->validate([
        'nombre_completo' => 'required|string',
        'email' => 'required|email',
        'telefono' => 'required|string',
        'nombre_del_curso' => 'required|string',
    ]);

    $asistencia = new Asistencia();
    $asistencia->nombre_completo = $request->input('nombre_completo');
    $asistencia->email = $request->input('email');
    $asistencia->telefono = $request->input('telefono');
    $asistencia->nombre_del_curso = $request->input('nombre_del_curso');

    $asistencia->save();

    return redirect()->route('formulario-asistencia');
}
}