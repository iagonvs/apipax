<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Services\EstadosService;
use App\Http\Controllers\EstadosController;

class ApiEstadosTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_de_integracao()
    {
        $estados = new EstadosService();

        $estados_consumo_servico = $estados->apilocalidades();

        $this->assertNotNull($estados_consumo_servico);
    }
}
