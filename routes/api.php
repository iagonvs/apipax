<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\EstadosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Produto
Route::delete('/deletarproduto', [ProdutoController::class, 'deletarProduto']);
Route::put('/atualizarproduto', [ProdutoController::class, 'atualizarProduto']);
Route::post('/salvarproduto', [ProdutoController::class, 'salvarProduto']);
Route::get('/buscarproduto', [ProdutoController::class, 'index']);

//Tipo do produto
Route::delete('/deletartipo', [TipoController::class, 'deletarTipo']);
Route::put('/atualizartipo', [TipoController::class, 'atualizarTipo']);
Route::post('/salvartipo', [TipoController::class, 'salvarTipo']);
Route::get('/buscartipo', [TipoController::class, 'index']);

//Busca Estados
Route::get('/inserirestados', [EstadosController::class, 'salvarEstados']);
Route::get('/buscarestados', [EstadosController::class, 'buscarEstados']);
