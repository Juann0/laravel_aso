<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $table = 'datos_personales';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_usuario',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'telefono',
    ];
}
