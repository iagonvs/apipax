<?php

namespace App\Http\Controllers;
use App\Models\Tipo;

use Illuminate\Http\Request;


class TipoController extends Controller
{
        //
        private  $tipo;

        public function __construct()
        {
            $this->tipo = new Tipo();
        }
    
        public function index(){
    
            $response = $this->tipo::all();
    
            return response()->json($response);
    
        }
    
        public function salvarTipo(Request $request){
            
            $this->tipo->tipo = $request->tipo;
            $this->tipo->save();

            return response()->json($this->tipo);
    
        }

        public function atualizarTipo(Request $request){

            $tipo = $this->tipo::find($request->id);
    
            $tipo->tipo = $request->tipo;
            $tipo->save();
    
            return response()->json($tipo);
    
        }

        public function deletarTIpo(Request $request){

            $delete = $this->tipo::find($request->id);
            $delete->delete();

            return response()->json(['Tipo excluido com sucesso'], 200);

        }

   
}
