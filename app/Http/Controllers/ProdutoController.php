<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Tipo;
use App\Models\ModeloProduto;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //
    private  $produto;
    private  $modelo_produtos;

    public function __construct()
    {
        $this->produto = new Produto();
        $this->modelo_produtos = new ModeloProduto();
    }

    public function index(){

        $response = $this->produto
            ->join('tipos', 'tipos.id', '=', 'produtos.id_tipo')
            ->join('modelo_produtos', 'modelo_produtos.id', '=', 'produtos.id_produto')
            ->select('produtos.*', 'tipos.tipo', 'modelo_produtos.produto')
            ->get();


        return response()->json($response);

    }

    public function salvarProduto(Request $request){

        
        $this->produto->id_produto = $request->id_produto;
        $this->produto->id_tipo = $request->id_tipo;

        $consulta_produto = $this->produto::where('id_produto', $request->id_produto)->get();
        

        if(isset($consulta_produto)){
            
            if($request->id_produto == 1 && $request->quantidade < 3){
                
                $this->produto->quantidade = 2;
                $this->produto->save();

                return response()->json($this->produto);

            }elseif($request->id_produto == 3 && $request->quantidade < 6){
                
                $this->produto->quantidade = 5;
                $this->produto->save();

                return response()->json($this->produto);
            }else{

                $this->produto->quantidade = $request->quantidade;
                $this->produto->save();

                return response()->json($this->produto);
            }
              
        }else{
            
            $this->produto->quantidade = $request->quantidade;
            $this->produto->save();

            return response()->json($this->produto);
        }

        

    }

    public function atualizarProduto(Request $request){

        $produto = $this->produto::find($request->id);

        $produto->produto = $request->id_produto;
        $produto->id_tipo = $request->id_tipo;
        $produto->quantidade = $request->quantidade;
        $produto->save();


        return response()->json($produto);

    }


    public function deletarProduto(Request $request){

        $delete = $this->produto::find($request->id);
        $delete->delete();

        return response()->json(['Produto excluido com sucesso'], 200);

    }
}
