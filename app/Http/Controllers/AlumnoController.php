<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();

        //dd($alumno);
        return view('alumno.alumnoListado' , compact('alumnos'));
    }

    public function create()
    {
        return view('alumno.alumnoCreate');
    }

    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'correo'=>'max:100 | unique:alumnos,correo',
            'codigo'=>'required | unique:alumnos,codigo'
        ]);

        $alumno = new Alumno();
        $alumno->codigo = $request->codigo;
        $alumno->nombre = $request->nombre;
        $alumno->carrera = $request->carrera;
        $alumno->creditos = $request->creditos;
        $alumno->correo = $request->correo;

        $alumno->save();

        return redirect()->route('alumno.store')->with('create','Alumno Creado con Exito');
    }

    public function show(Alumno $alumno)
    {
        return view('alumno.alumnoEdit' , ["alumno"=>$alumno,"editar"=> true] );
    }

    public function edit(Alumno $alumno)
    {
        //dd($alumno);
        return view('alumno.alumnoEdit', ["alumno"=>$alumno,"editar"=> false]);
    }


    public function update(Request $request, Alumno $alumno)
    {
        $id =
        $request->validate([
            'correo'=>['max:100',Rule::unique('alumnos')->ignore($alumno->id, 'id')],
            'codigo'=>['required',Rule::unique('alumnos')->ignore($alumno->id, 'id')]
        ]);

        $alumno->codigo = $request->codigo;
        $alumno->nombre = $request->nombre;
        $alumno->carrera = $request->carrera;
        $alumno->creditos = $request->creditos;
        $alumno->correo = $request->correo;

        $alumno->update();

        $mesage = "Alumno con ID: $alumno->id editado con exito";
            return redirect()->route('alumno.index')->with('edit',$mesage);

    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumno.index')->with('destroy','Alumno Eliminado');
    }
}
