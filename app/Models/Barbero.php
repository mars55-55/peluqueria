<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barbero extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'porcentaje_ganancia'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function especialidades()
    {
        return $this->belongsToMany(Especialidad::class, 'barbero_especialidad');
    }

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
