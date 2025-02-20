<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = ['barbero_id', 'cita_id', 'total_cobrado', 'ganancia_barbero'];

    public function barbero()
    {
        return $this->belongsTo(Barbero::class);
    }

    public function cita()
    {
        return $this->belongsTo(Cita::class);
    }
}
