<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        return view('reservar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'personas' => 'required|integer',
            'fecha_reserva' => 'required|date',
        ]);

        Reserva::create($request->all());

        return redirect()->back()->with('success', 'Reserva realizada con éxito');
    }
}
