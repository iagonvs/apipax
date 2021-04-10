<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Tipo;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //
    private  $produto;

    public function __construct()
    {
        $this->produto = new Produto();
    }

    public function index(){

        $response = $this->produto
            ->join('tipos', 'tipos.id', '=', 'produtos.id_tipo')
            ->select('produtos.*', 'tipos.tipo')
            ->get();


        return response()->json($response);

    }

    public function salvarProduto(Request $request){

        $this->produto->produto = $request->produto;
        $this->produto->id_tipo = $request->id_tipo;
        $this->produto->quantidade = $request->quantidade;
        $this->produto->save();

        return response()->json($this->produto);

    }

    public function atualizarProduto(Request $request){

        $produto = $this->produto::find($request->id);

        $produto->produto = $produto;
        $produto->id_tipo = $tipo;
        $produto->quantidade = $quantidade;
        $produto->save();


        return response()->json($produto);

    }

    private function salvarTodos($produto, $tipo, $quantidade){

       

    }
    
    public function deletarProduto(Request $request){

        $delete = $this->produto::find($request->id);
        $delete->delete();

        return response()->json(['Produto excluido com sucesso'], 200);

    }
}
