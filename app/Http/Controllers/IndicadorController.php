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
}
