<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulosController extends Controller
{
    //

    public function index(){

        $modulos = Modulo::all();
        //return view('modulos',array('arrayModulos'=>$modulos));
        return $modulos;



    }
}
