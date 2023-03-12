<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $primaryKey = 'id'; // or null

    public $incrementing = true;
    protected $fillable = ['nombreIndicador', 'codigoIndicador', 'unidadMedidaIndicador','valorIndicador','fechaIndicador','tiempoIndicador','origenIndicador'];
}

