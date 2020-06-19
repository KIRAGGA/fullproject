<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Support\Facades\Validator;
use App\Todo;

class TodoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); // This is the authentication middleware
    }


    public function index()
    {
        $todos = auth()->user()->todos()->orderBy('completed')->get();
        return view ('todos.index', compact('todos'));
    }

    public function create() 
    {
        return view ('todos.create');
    }

    public function show (Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }


    public function store(TodoCreateRequest $request) 
    {
        auth()->user()->todos()->create($request->all());
        // Todo::create($request->all());
        return redirect(route('todo.index'))->with('message', 'Todo created sucessfully');
    }

    public function edit(Todo $todo) // Using route model binding
    {
        // $todo = Todo::find($id);
       
        return view ('todos.edit', compact('todo'));
    }


    public function update(TodoCreateRequest $request, Todo $todo)
    {
       $todo->update(['title' => $request->title]);
       return redirect(route('todo.index'))->with('message', 'updated');
    }


    public function complete(Todo $todo)
    {
        $todo->update(['completed' =>true]);
        return redirect()->back()->with('message', 'Task Marked as completed');
    }


    public function incomplete(Todo $todo)
    {
        $todo->update(['completed' =>false]);
        return redirect()->back()->with('message', 'Task Marked as Incompleted');
    }


    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect(route('todo.index'))->with('message', 'Task deleted');
    }
}

