<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

/*

*/



Route::get('/produtos', [EventController::class, 'createProduto']);


Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);


Route::get('/produto_teste/{id?}', [EventController::class, 'createProdutoId']);
