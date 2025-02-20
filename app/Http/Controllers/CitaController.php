<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Barbero;
use App\Models\User;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::with(['cliente', 'barbero'])->get();
        return view('citas.index', compact('citas'));
    }

    public function create()
    {
        $clientes = User::where('role', 'cliente')->get();
        $barberos = Barbero::with('user')->get();
        return view('citas.create', compact('clientes', 'barberos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:users,id',
            'barbero_id' => 'required|exists:barberos,id',
            'fecha_hora' => 'required|date',
            'precio' => 'required|numeric'
        ]);

        Cita::create($request->all());

        return redirect()->route('citas.index')->with('success', 'Cita creada');
    }

    public function destroy($id)
    {
        Cita::findOrFail($id)->delete();
        return redirect()->route('citas.index')->with('success', 'Cita eliminada');
    }
}
