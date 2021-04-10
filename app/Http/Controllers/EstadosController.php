<?php

namespace App\Http\Controllers;
use App\Models\Estados;
use Illuminate\Support\Facades\DB;
use App\Services\EstadosService;

use Illuminate\Http\Request;

class EstadosController extends Controller
{
     

     private  $estados;
     private $estados_service;

    public function __construct()
    {
        $this->estados = new Estados();
        $this->estados_service = new EstadosService();
    }

    public function buscarEstados(){

        return $this->estados::all();

    }

    public function salvarEstados(){

        $responses = $this->estados_service->apilocalidades();

        foreach ($responses as $response){

            $estados = new Estados();

            $estados->nome = $response['nome'];
            $estados->uf = $response['sigla'];
            $estados->save();
            
        }

        return response()->json($this->estados::all());

    }

}
