<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function store(Request $request)
    {
        // Validar la entrada
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'nombre_padre' => 'required|string|max:255',
            'nombre_madre' => 'required|string|max:255',
            'grado' => 'required|integer',
            'seccion' => 'required|string|max:1',
            'fecha_ingreso' => 'required|date',
        ]);

        // Crear el alumno
        $alumno = Alumno::create($validated);
        
        return response()->json($alumno, 201);
    }

    public function index($grado)
    {
        // Consultar alumnos por grado
        $alumnos = Alumno::where('grado', $grado)->get();

        return response()->json($alumnos);
    }
}
