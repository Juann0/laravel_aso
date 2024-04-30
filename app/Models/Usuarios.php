<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $table = 'usuarios';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'email',
        'password',
        'rol',
        'estado',
        'imagen',
    ];

    
}
