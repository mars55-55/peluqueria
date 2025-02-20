<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidad;

class EspecialidadController extends Controller
{
    public function index()
    {
        $especialidades = Especialidad::all();
        return view('especialidades.index', compact('especialidades'));
    }

    public function create()
    {
        return view('especialidades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:especialidades'
        ]);

        Especialidad::create(['nombre' => $request->nombre]);

        return redirect()->route('especialidades.index')->with('success', 'Especialidad creada');
    }

    public function destroy($id)
    {
        Especialidad::findOrFail($id)->delete();
        return redirect()->route('especialidades.index')->with('success', 'Especialidad eliminada');
    }
}
