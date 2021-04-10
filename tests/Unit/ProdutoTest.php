<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Produto;
use App\Http\Controllers\ProdutoController;

use DB;

class ProdutoTest extends TestCase
{
    
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_funcao_cadastrar_produto()
    {
        DB::beginTransaction();
        $produto = [
            "id_produto" => 1,
            "id_tipo" => 1,
            "quantidade" => 20
        ];

        $this->json('POST', 'api/salvarproduto', $produto)
            ->assertStatus(200);   
        DB::rollback();  
    }

    public function test_buscar_produtos(){
        
        $produtos = $this->json('GET', 'api/buscarproduto')->assertStatus(200);

        $this->assertNotNull($produtos);
    }

}
