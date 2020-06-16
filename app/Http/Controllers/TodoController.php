<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Support\Facades\Validator;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        
        return view ('todos.index', compact('todos'));
    }

    public function create() 
    {
        return view ('todos.create');
    }

    public function store(TodoCreateRequest $request) 
    {
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo created sucessfully');
    }

    public function edit(Todo $todo) // Using route model binding
    {
        // $todo = Todo::find($id);
       
        return view ('todos.edit', compact('todo'));
    }

    public function update(Todo $todo)
    {
        
    }
}

