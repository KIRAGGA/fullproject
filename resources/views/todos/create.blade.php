@extends('todos.layout')

@section('content')

        <div class="flex justify-between border-b pb-4 px-4">
            <h1 class="text-2x1 pb-4"> What To do?</h1>
         <a href="{{route('todo.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
        <span class="fas fa-arrow-left"></span>
        </a>
        </div>
    

    <div class="text-center pt-10">

        <x-alert/>
        <form method="post" action="{{route('todo.store')}}" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border rounded">
            <input type="submit" value="create" class="p-2 border rounded">
        </form>
    
    </div>
   
@endsection
