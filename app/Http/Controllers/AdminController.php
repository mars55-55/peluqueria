<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barbero;
use App\Models\Cita;
use App\Models\Pago;
use App\Models\Especialidad;

class AdminController extends Controller
{
    public function index()
    {
        $barberos = Barbero::with('user')->get();
        $citas = Cita::with(['cliente', 'barbero'])->get();
        $pagos = Pago::with(['barbero', 'cita'])->get();

        return view('admin.dashboard', compact('barberos', 'citas', 'pagos'));
    }
}