<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
    
    $events = Event::all();

    return view('welcome', ['events' => $events]);
    }

    public function create(){

        return view('events.create');
    }

    public function createProdutoId($id = null){
        return view('produto_teste', ['id' => $id]);
    }

    public function createProduto(){

        $arr = [1,2,3,4,5];
        $produtos = ['Camisa', 'Short', 'Blusa'];

        return view('produtos', [
            'arr' => $arr,
            'produtos' => $produtos
        ]);
    }
}
