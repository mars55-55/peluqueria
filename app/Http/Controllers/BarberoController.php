<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barbero;
use App\Models\User;

class BarberoController extends Controller
{
    public function index()
    {
        $barberos = Barbero::with('user')->get();
        return view('barberos.index', compact('barberos'));
    }

    public function create()
    {
        return view('barberos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'porcentaje_ganancia' => 'required|numeric',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'barbero'
        ]);

        Barbero::create([
            'user_id' => $user->id,
            'porcentaje_ganancia' => $request->porcentaje_ganancia
        ]);

        return redirect()->route('barberos.index')->with('success', 'Barbero agregado correctamente');
    }

    public function destroy($id)
    {
        Barbero::findOrFail($id)->delete();
        return redirect()->route('barberos.index')->with('success', 'Barbero eliminado');
    }
}
