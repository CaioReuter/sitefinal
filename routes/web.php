<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

// Agora a tela principal será o CRUD de produtos
Route::get('/', [ProdutoController::class, 'index']);

// Rotas do CRUD
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::put('/produtos/{produto}', [ProdutoController::class, 'update']);
Route::delete('/produtos/{produto}', [ProdutoController::class, 'destroy']);
