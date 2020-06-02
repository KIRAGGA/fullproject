<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        return view ('todos.index');
    }

    public function create() 
    {
        return view ('todos.create');
    }

    public function store(Request $request) 
    {
        dd($request->all());
        // return redirect()->with('message', 'Todo created sucessfully');
    }

    public function edit() 
    {
        return view ('todos.edit');
    }
}

