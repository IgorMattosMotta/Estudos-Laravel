<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $arr = [1,2,3,4,5];
    $nomes = ['Igor', 'Mattos', 'Motta'];

    return view('welcome', [
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});
