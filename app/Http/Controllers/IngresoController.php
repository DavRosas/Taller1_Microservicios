<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingreso;

class IngresoController extends Controller
{
    public function index()
    {
        $ingresos = Ingreso::all();
        return response()->json($ingresos);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'codigo_estudiante' => 'required',
            'nombre_estudiante' => 'required',
            'programa_id' => 'required|exists:programas,id',
            'fecha_hora_ingreso' => 'required|date',
            'sala_id' => 'required|exists:salas,id',
            'responsable_id' => 'required|exists:responsables,id',
        ]);

        $ingreso = Ingreso::create($validatedData);
        return response()->json($ingreso, 201);
    }

    public function show($id)
    {
        $ingreso = Ingreso::findOrFail($id);
        return response()->json($ingreso);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'codigo_estudiante' => 'sometimes|required',
            'nombre_estudiante' => 'sometimes|required',
            'programa_id' => 'sometimes|required|exists:programas,id',
            'fecha_hora_ingreso' => 'sometimes|required|date',
            'sala_id' => 'sometimes|required|exists:salas,id',
            'responsable_id' => 'sometimes|required|exists:responsables,id',
        ]);

        $ingreso = Ingreso::findOrFail($id);
        $ingreso->update($validatedData);
        return response()->json($ingreso);
    }

    public function destroy($id)
    {
        $ingreso = Ingreso::findOrFail($id);
        $ingreso->delete();
        return response()->json(null, 204);
    }
}