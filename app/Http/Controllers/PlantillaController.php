<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantillaController extends Controller
{
    public function index(){
    	return view('plantilla');
    }

    public function store(Request $request){
       $plantilla =new Plantilla();
        $plantilla ->name=$request->input('name');
        $plantilla ->apellido=$request->input('apellido');
       $plantilla->mail=$request->input('mail');  
       $plantilla->direccion=$request->input('direccion');      
       $plantilla->save();

       $ticket=plantilla::All();
       return view('registro',compact(Plantilla));
 

    }
}
