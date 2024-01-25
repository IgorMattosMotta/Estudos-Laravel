<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

/*

*/



Route::get('/produtos', [EventController::class, 'createProduto']);


Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/produto_teste/{id?}', [EventController::class, 'createProdutoId']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
