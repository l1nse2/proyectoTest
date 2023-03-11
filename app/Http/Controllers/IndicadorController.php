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

      public function ajax()
    {
         $msg = "This is a simple message.";
      	 return response()->json(array('msg'=> $msg), 200);
    }

      public function destroy(Indicador $indicador)
    {
    	dd('borrado');
        $company->delete();
        return redirect()->route('companies.index')->with('success','Company has been deleted successfully');
    }
}
