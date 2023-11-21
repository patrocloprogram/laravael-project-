<?php

namespace App\Http\Controllers;

use App\Models\estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['estudiantes']=estudiante::paginate(5);
        return view('estudiante.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos= [
            'nombre_completo'=>'required|string|max:100',
            'email'=>'required|email',
            'telefono'=>'required|string|max:100',
            'nombre_del_curso'=>'required|string|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request,$campos,$mensaje);

        $datosEstudiante = request()->except('_token');
        estudiante::insert($datosEstudiante);
         //return response()->json($datosEstudiante);
         return redirect('estudiante')->with('mensaje','Estudiante agregado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $estudiante=estudiante::findOrFail($id);
        return view('estudiante.edit',compact('estudiante'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos= [
            'nombre_completo'=>'required|string|max:100',
            'email'=>'required|email',
            'telefono'=>'required|string|max:100',
            'nombre_del_curso'=>'required|string|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request,$campos,$mensaje);



        $datosEstudiante = request()->except('_token','_method');
        estudiante::where('id','=',$id)->update($datosEstudiante);
        $estudiante=estudiante::findOrFail($id);
        //return view('estudiante.edit',compact('estudiante'));
        return redirect('estudiante')->with('mensaje','Estudiante Actualizado');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        estudiante::destroy($id);
        return redirect('estudiante')->with('mensaje','Estudiante borrado');
    }
    
}

