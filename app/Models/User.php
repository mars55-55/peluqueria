<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'role'];

    public function barbero()
    {
        return $this->hasOne(Barbero::class);
    }

    public function citas()
    {
        return $this->hasMany(Cita::class, 'cliente_id');
    }
}
