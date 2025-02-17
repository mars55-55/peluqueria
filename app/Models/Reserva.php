<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    // Definir los campos que son asignables masivamente
    protected $fillable = ['nombre', 'email', 'telefono', 'personas', 'fecha_reserva'];

    // Si prefieres usar $guarded, asegúrate de proteger solo lo necesario
    // protected $guarded = ['id']; // ejemplo si el campo 'id' debe ser protegido
}
