@extends('todos.layout')

@section('content')
<div class="flex justify-center border-b pb-4">
        <h1 class="text-2x1">All Todo list</h1>
        <a href="/todos/create" class="mx-5 py-1 px-1 cursor-pointer rounded text-white bg-blue-400">
            Create New</a>
    </div>
        <ul class="my-5">
        @foreach ($todos as $todo)

            <div class="flex justify-between border-b pb-4">
                @if ($todo->completed)
                    <p class="line-through">{{$todo->title}}</p>

                @else
                <p>{{$todo->title}}</p>

                @endif

                <div>
                    
                <a href="{{'/todos/'.$todo->id.'/edit'}}" 
                    class="text-orange-400 cursor-pointer text-white">
                        <span class="fas fa-edit px-2"></span>
                </a>

                @if($todo->completed)
                   
                     <span class="fas fa-check text-green-400 px-2"></span>
                @else
                    <span onclick="event.preventDefault(); console.log('hello')" class="fas fa-check  text-gray-300  cursor-pointer px-2"></span>

                    <form style="dispay:none" action="{{route('todo.complete', $todo->id)}}" method="post">
                        @csrf
                        @method('put')
                    </form>

                @endif

            </div>
                {{-- @include('todos.completed-button') --}}
            </div>

        </form>


        @endforeach
    </ul>
</div>
    
@endsection