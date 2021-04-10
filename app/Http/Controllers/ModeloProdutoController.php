<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModeloProduto;

class ModeloProdutoController extends Controller
{

    private  $modelo_produtos;

    public function __construct()
    {
        $this->modelo_produtos = new ModeloProduto();
    }


    public function index(){
    
        $response = $this->modelo_produtos::all();

        return response()->json($response);

    }

    public function salvarModelo(Request $request){
        
        $this->modelo_produtos->produto = $request->produto;
        $this->modelo_produtos->save();

        return response()->json($this->modelo_produtos);

    }

    public function atualizarModelo(Request $request){

        $modelo = $this->modelo_produtos::find($request->id);

        $modelo->produto = $request->produto;
        $modelo->save();

        return response()->json($modelo);

    }

    public function deletarModelo(Request $request){

        $delete = $this->modelo_produtos::find($request->id);
        $delete->delete();

        return response()->json(['Modelo de Produto excluido com sucesso'], 200);

    }
}
