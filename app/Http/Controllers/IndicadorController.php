<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Indicador;

class IndicadorController extends Controller
{
     public function index()
    {
        $indicadores = Indicador::orderBy('id')->paginate(20);       	
        return view('index', compact('indicadores'));
    }

      public function deleteAjax(Request $request)
    {   
    	$id = $request->id;
    	$indicador = Indicador::find($id); 	 
    	if ($this->destroy($indicador))
    	{
    		$indicadores = Indicador::orderBy('id')->paginate(20);
    		$indicadores = json_encode($indicadores);
    		return response()->json(array('msg'=> true,'indicadores'=> $indicadores ), 200);
    	}
    	else
    	{return response()->json(array('msg'=> false), 500);}
      	 
    }

      public function destroy(Indicador $indicador)
    {	
        $indicador->delete();
        return true;
    }
}
