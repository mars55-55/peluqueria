<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'barbero_id', 'fecha_hora', 'precio', 'estado'];

    public function cliente()
    {
        return $this->belongsTo(User::class, 'cliente_id');
    }

    public function barbero()
    {
        return $this->belongsTo(Barbero::class);
    }

    public function pago()
    {
        return $this->hasOne(Pago::class);
    }
}
