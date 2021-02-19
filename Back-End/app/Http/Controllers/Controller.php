<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Persona;

class Controller extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Esta funcion sirve para ...
     * devuelve un array de ...
     * necesita que le pases un ...
     */

    function nombre(){

        $nombre =  DB::table('personas')->where('nombre','diego')->first();
        //DB::raw('select * from pruebaaxios where nombre = diego', [1]);
        return $nombre;

    }



}
/**
 * armamos la migracion
 * generamos el modelo
 * generamos el controller
 *          el controller tiene que tener un "use App\Models\+insertemodeloaqui+
 * ponemos los metodos al controller
 * ruteamos con la api
 */