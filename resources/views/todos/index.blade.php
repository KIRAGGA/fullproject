@extends('todos.layout')

@section('content')
<div class="flex justify-center border-b pb-4">
        <h1 class="text-2x1">All Todo list</h1>
        <a href="/todos/create" class="mx-5 py-1 px-1 cursor-pointer rounded text-white bg-blue-400">Create New</a>
    </div>
        <ul class="my-5">
        @foreach ($todos as $todo)

            <div class="flex justify-between border-b pb-4">
                {{$todo->title}} 
                <a href="{{'/todos/'.$todo->id.'/edit'}}" 
                    class="bg-orange-400 cursor-pointer rounded text-white">
                <span class="fas fa-edit px-2"></span>
                </a>
                {{-- @include('todos.completed-button') --}}
            </div>

        </form>


        @endforeach
    </ul>
</div>
    
@endsection