<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

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

    }

    public function show(Request $request)
    {
        //
        //return redirect()->route('platillo.index');
    }

    public function edit(Alumno $alumno)
    {
        //
        //return view('platillos.platillo_editar', compact('platillo'));
    }


    public function update(Request $request, Alumno $alumno)
    {


    }

    public function destroy($id)
    {
        //dd($id);

    }
}
