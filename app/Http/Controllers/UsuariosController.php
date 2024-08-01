<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuariosController extends Controller
{
    public function CrearUsuario(){
        return view('nuevoUsuario');
    }

    public function GuardarUsuario(Request $request){
        $guardarUsuario = Http::post('http://localhost:8080/api/CrearUsuario',[
            "correo"=>$request->email,
            "contrasenia"=>$request->contrasena,
            "persona"=>[
                "dni"=>$request->dni,
                "nombre1"=>$request->primerNombre,
                "nombre2"=>$request->segundoNombre,
                "apellido1"=>$request->primerApellido,
                "apellido2"=>$request->segundoApellido,
                "telefonos"=>[
                    [
                        "numero"=>$request->telefono
                    ]
                ]
            ]
        ]);

        echo($guardarUsuario);
        exit;

    }
}
