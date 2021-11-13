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

    public function create()
    {
        return view('create');
    }

    public function update()
    {
        return view('update');
    }

    public function delete()
    {
        return view('delete');
    }

}