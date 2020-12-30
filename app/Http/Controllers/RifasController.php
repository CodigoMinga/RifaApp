<?php

namespace App\Http\Controllers;

use App\rifas;
use Illuminate\Http\Request;

class RifasController extends Controller
{
    function add(Request $request){
        $input = $request->all();
        $rifa = new rifas();
        if($rifa->fill($input)->save()){
            return $rifa;
        }else{
            return 'Error al generar una RIFA';
        }
    }

    function list(Request $request){
        $rifas = rifas::get();
        return $rifas;
    }
}
