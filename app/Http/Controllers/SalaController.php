<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala; // Asegúrate de importar el modelo Sala

class SalaController extends Controller
{
    public function index()
    {
        $salas = Sala::all();
        return response()->json($salas);
    }

    // Otros métodos como store, show, update, destroy
}