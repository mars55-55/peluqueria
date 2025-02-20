<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;
use App\Models\Cita;
use App\Models\Barbero;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::with(['barbero', 'cita'])->get();
        return view('pagos.index', compact('pagos'));
    }

    public function create()
    {
        $citas = Cita::where('estado', 'completada')->get();
        return view('pagos.create', compact('citas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cita_id' => 'required|exists:citas,id',
            'total_cobrado' => 'required|numeric'
        ]);

        $cita = Cita::findOrFail($request->cita_id);
        $barbero = Barbero::findOrFail($cita->barbero_id);
        $ganancia = $request->total_cobrado * ($barbero->porcentaje_ganancia / 100);

        Pago::create([
            'cita_id' => $cita->id,
            'barbero_id' => $barbero->id,
            'total_cobrado' => $request->total_cobrado,
            'ganancia_barbero' => $ganancia
        ]);

        return redirect()->route('pagos.index')->with('success', 'Pago registrado');
    }
}
