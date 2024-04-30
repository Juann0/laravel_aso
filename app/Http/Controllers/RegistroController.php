<?php

namespace App\Http\Controllers;

use App\Models\DatosPersonales;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function index()
    {
        return view('auth.registro');
    }

    public function registroDeUsuarios(Request $request)
    {
        // $request->validate([
        //     'nombre' => 'required',
        //     'apellido' => 'required',
        //     'correo' => 'required',
        //     'password' => 'required'
        // ]);
        $data = $request->all();
        $this->create($data);
        return redirect()->back()->withInput()->with('correcto', 'Usuario registrado correctamente');
    }

    public function create(array $data)
    {
        Usuarios::create([
            'email' => 'juan@gmail.com',
            'password' => Hash::make('juan'),
            'rol' => 'ADM',
            'estado' => 'S',
            'imagen' => 'hola',
        ]);

        // $data = DB::table('usuarios')->where('correo', $data['correo'])->first();
        $data = DB::table('usuarios')->where('email', 'juan@gmail.com')->first();
       
        DatosPersonales::create([
            'id_usuario' => $data->id,
            'primer_nombre' => 'Juan',
            'segundo_nombre' => 'David',
            'primer_apellido' => 'Diaz',
            'segundo_apellido' => 'Valencia',
            'telefono' => '3204305104',
        ]);
    }
}
