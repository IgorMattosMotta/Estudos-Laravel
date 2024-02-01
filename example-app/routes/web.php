<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

/*

*/



Route::get('/produtos', [EventController::class, 'createProduto']);


Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/produto_teste/{id?}', [EventController::class, 'createProdutoId']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');