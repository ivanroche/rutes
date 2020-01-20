<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasController extends Controller
{
    //Acció que retorne la VarnishStat
    public function getindex() {
      return view('frutas.index')
          ->with ('frutas',array ('naranja','pera','sandia'));
    }

public function getnaranjas(){

return 'Prova de Naranjas';


}


public function getperas(){

return 'Prova de peras';


}


}
