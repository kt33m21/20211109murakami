<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();   
        return view('layouts.index', ['items' => $items]);
    }
    public function find()
    {
        return view('find',['input' =>'']);
    }
    public function search(Request $request)
    {
        $item = Todo::where('content','LIKE',"%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find',$param);
    }
    public function bind(Todo $Todo)
    {
        $data = [
            'item' => $Todo,
        ];
        return view('Todo.binds',$data);
    }
    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
}
