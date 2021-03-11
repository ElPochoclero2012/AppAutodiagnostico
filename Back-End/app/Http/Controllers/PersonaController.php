<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class PersonaController extends Controller
{
    function mostrarDatosPersonas(Request $request, $id)
    {

        //No usar comillas para llamar las variables en la query
        $request = DB::table('personas')->where('id', '=', $id)->get();
        return $request;
    }

    function mostrarSintomasPersonas(Request $request, $id)
    {

        //No usar comillas para llamar las variables en la query
        $request = DB::table('personas')->where('id', '=', $id)->get('sintomas');
        return $request;
    }
}
