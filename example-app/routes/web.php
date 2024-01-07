<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

/*

*/



Route::get('/produtos', function () {
    $arr = [1,2,3,4,5];
    $produtos = ['Camisa', 'Short', 'Blusa'];

    return view('produtos', [
        'arr' => $arr,
        'produtos' => $produtos
    ]);
});


Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);


Route::get('/produto_teste/{id?}', function($id = null){
    return view('produto_teste', ['id' => $id]);
});
