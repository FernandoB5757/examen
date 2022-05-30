<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Foundation\Mix;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = materia::all();

        //dd($materia);
        return view('materia.materiaListado' , compact('materias'));
    }

    public function create()
    {
        return view('materia.materiaCreate');
    }

    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'creditos'=>'required | integer | min:1',
            'nombre'=>'required | string',
            'profesor'=>'required | string',
            'turno'=>'required | string'
        ]);

        if(isset($request->disponible))
            $request->disponible = 1;
        else
            $request->disponible = 0;

        $materia = new Materia();
        $materia->creditos = $request->creditos;
        $materia->nombre = $request->nombre;
        $materia->profesor = $request->profesor;
        $materia->turno = $request->turno;
        $materia->disponible = $request->disponible;


        $materia->save();

        return redirect()->route('materia.index')->with('create','Materia Creado con Exito.');
    }

    public function show(materia $materia)
    {
        return view('materia.materiaEdit' , ["materia"=>$materia,"editar"=> true] );
    }

    public function edit(materia $materia)
    {
        //dd($materia);
        return view('materia.materiaEdit', ["materia"=>$materia,"editar"=> false]);
    }


    public function update(Request $request, Materia $materia)
    {
        $id =
        $request->validate([
            'correo'=>['max:100',Rule::unique('materias')->ignore($materia->id, 'id')],
            'codigo'=>['required',Rule::unique('materias')->ignore($materia->id, 'id')]
        ]);

        $materia->codigo = $request->codigo;
        $materia->nombre = $request->nombre;
        $materia->carrera = $request->carrera;
        $materia->creditos = $request->creditos;
        $materia->correo = $request->correo;

        $materia->update();

        $mesage = "materia con ID: $materia->id editado con exito";
            return redirect()->route('materia.index')->with('edit',$mesage);

    }

    public function destroy(materia $materia)
    {
        $materia->delete();
        return redirect()->route('materia.index')->with('destroy','materia Eliminado');
    }
}
