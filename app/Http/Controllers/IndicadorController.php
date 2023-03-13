<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Indicador;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class IndicadorController extends Controller
{
     public function index()
    {    	
        //obtener indicadores
    	$tipoIndicadores = $result = DB::table('indicadors')
		->select('nombreindicador')
		->distinct()
		->get();

        //obtener fechas para usar en Y
        $fechaIndicadores = DB::table('indicadors')
        ->select('fechaindicador')
        ->distinct()
        ->orderBy('fechaindicador')
        ->get();;

        $indicadoresValorFecha = Indicador::all();
        $indicadoresValorFecha = $indicadoresValorFecha->groupBy('nombreIndicador');
        
        
        //dd($tipoIndicador);    
        //$indicadores = Indicador::orderBy('id','desc')->paginate(20);       	
        return view('index', compact( 'tipoIndicadores' , 'fechaIndicadores','indicadoresValorFecha'));
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

      public function verAjax(Request $request)
    {   
    	$id = $request->id;
    	$indicador = Indicador::find($id); 	 
    	if ($indicador)
    	{
    		return response()->json(array('msg'=> true,'indicador'=> $indicador ), 200);
    	}
    	else
    	{
    		return response()->json(array('msg'=> false), 500);
    	}
      	 
    }
      public function destroy(Indicador $indicador)
    {	
        $indicador->delete();
        return true;
    }

    public function guardarAjax(Request $request)
    {
    	
        $validator = Validator::make($request->all(), [
            'nombre'=>'required',
            'codigo'=>'required',
            'unidadMedida'=>'required',            
            'origen'=>'required',
            'valor'=>'required|max:10|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'fecha'=>'required|date'
        ],[
    		'required' => 'Cuidado!! el campo :attribute no se puede dejar vacio',
    		'valor.max' => 'Cuidado!! el campo valor no puede superar los 10 caracteres',
    		'valor.regex' => 'Cuidado!! el campo valor solo admite numeros' 
		]);

        if ($validator->fails()) {
        	$errors = json_encode($validator->errors());
        	return response()->json(array('msg'=> false,'errores'=> $errors ), 400);            
        }else
        {
        	 $count = Indicador::count();        	
        	 $indicador = new Indicador([
            'nombreIndicador' => $request->get('nombre'),
            'codigoIndicador' => $request->get('codigo'),
            'unidadMedidaIndicador' => $request->get('unidadMedida'),
            'valorIndicador' => $request->get('valor'),
            'fechaIndicador' => $request->get('fecha'),
            'origenIndicador' => $request->get('origen'),
            'id' => $count +1,
        	]);
        	if($indicador->save()){
        		return response()->json(array('msg'=> true), 200); 
        	}else
        	{
        		return response()->json(array('msg'=> false), 400); 
        	}
        	
        }
    }

    public function openEditarAjax(Request $request)
    {
    	$id = $request->id;
    	$indicador = Indicador::find($id); 	 
    	if ($indicador)
    	{
    		return response()->json(array('msg'=> true,'indicador'=> $indicador ), 200);
    	}
    	else
    	{
    		return response()->json(array('msg'=> false), 500);
    	}
    }

    public function editarAjax(Request $request){

    	$validator = Validator::make($request->all(), [
            'nombre'=>'required',
            'codigo'=>'required',
            'unidadMedida'=>'required',            
            'origen'=>'required',
            'valor'=>'required|max:10|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'fecha'=>'required|date'
        ],[
    		'required' => 'Cuidado!! el campo :attribute no se puede dejar vacio',
    		'valor.max' => 'Cuidado!! el campo valor no puede superar los 10 caracteres',
    		'valor.regex' => 'Cuidado!! el campo valor solo admite numeros' 
		]);    	
        if ($validator->fails()) {        	
        	$errors = json_encode($validator->errors());
        	return response()->json(array('msg'=> false,'errores'=> $errors ), 400);            
        }else
        {    
    		$indicador = Indicador::find($request->id); 	
            $indicador->nombreIndicador = $request->get('nombre');
            $indicador->codigoIndicador = $request->get('codigo');
            $indicador->unidadMedidaIndicador = $request->get('unidadMedida');
            $indicador->valorIndicador = $request->get('valor');
            $indicador->fechaIndicador = $request->get('fecha');
            $indicador->origenIndicador = $request->get('origen');        	
        	if($indicador->save()){
        		return response()->json(array('msg'=> true), 200);         		
        	}else
        	{
        		return response()->json(array('msg'=> false), 400); 
        	}        	
        }
    }
}
