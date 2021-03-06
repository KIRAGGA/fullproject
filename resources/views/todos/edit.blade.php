@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2x1 pb-4">Update Todo list</h1>
 <a href="{{route('todo.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
<span class="fas fa-arrow-left"></span>
</a>
</div>

<div class="text-center pt-10">

    <x-alert/>
    <form method="post" action="{{route('todo.update', $todo->id)}}" class="py-5">
        @csrf
        @method('patch')

        <div class="py-1">
            <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border rounded">
        </div>

        <div class="py-1">
            <textarea type="text" name="description" placeholder="Description"
             class="py-2 px-2 rounded border">
                {{$todo->description}}
            </textarea>
        </div>

        <div class="py-2">
            @livewire('edit-step', ['steps'=> $todo->steps])
        </div>

        <div class="py-1">
            <input type="submit" value="update" class="p-2 border rounded">
        </div>

    </form>
</div>
@endsection