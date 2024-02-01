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

    public function store(Request $request){

        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        //Image upload
        if($request->hasFile('image') ** $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
   
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id){
        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }
}
