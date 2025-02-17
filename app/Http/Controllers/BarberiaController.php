<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarberiaController extends Controller
{
    public function index()
    {
        return view('barberia.index');
    }
}
