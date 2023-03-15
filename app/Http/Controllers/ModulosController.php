<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo;

class ModulosController extends Controller
{
    //

    public function index(){

        $modulos = Modulo::all();
        return view('modulos',array('arrayModulos'=>$modulos));
        //return $modulos;



    }

    public function getEdit($id){

        $modulo = Modulo::findOrFail($id);

        return view('edit',array('modulo'=>$modulo));
    }


    public function putEdit(Request $request,$id){

        $modulo = Modulo::findOrFail($id);

        $modulo->nombre = $request->input('nombre');
        $modulo->especialidad_id = $request->input('especialidad');
        $modulo->ciclo_id = $request->input('ciclo');
        $modulo->save();

        $url = action([ModulosController::class, 'index']);
        return redirect($url);



    }
}
