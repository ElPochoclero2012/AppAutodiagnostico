<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
Use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{

    public function index(){
        //Selecciona todo lo que haya en la tabla persona y despues se muestra con el return
        $persona = Persona::all();
        return $persona;
        
    }

    function apellido(){

        //Selecciona lo que hay en apellido y lo obtiene, despues se muestra con el return
        $apellidoP = DB::table('personas')->select('apellido')->get();
        return $apellidoP;

    }
    function sintomas(){

        //Selecciona lo que hay en sintormas y lo obtiene, despues se muestra con el return
        $sintomasP = DB::table('personas')->select('sintomas')->get();
        return $sintomasP;

    }
    function datos(){

        $datoN = DB::table('personas')->select('nombre')->get();
        $datoA = DB::table('personas')->select('apellido')->get();
        return [$datoN, $datoA];

    }
    function mostrarDatosPersonas(Request $request, $id){
        //No usar comillas para llamar las variables en la query
        $request = DB::table('personas')->where('id', '=', $id)->get();
        return $request;
    }
    

 
}






