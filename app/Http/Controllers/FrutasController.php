<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasController extends Controller
{
    //Acció que retorne la VarnishStat
    public function index() {
      return view('frutas.index')
          ->with ('frutas',array ('naranja','pera','sandia'));
    }

public function naranjas(){

return 'Prova de Naranjas';


}


public function peras(){

return 'Prova de peras';


}


}
