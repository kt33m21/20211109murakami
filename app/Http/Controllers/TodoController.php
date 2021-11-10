<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('layouts.index');
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