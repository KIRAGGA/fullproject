@extends('todos.layout')

@section('content')
<div class="flex justify-center border-b pb-4">
        <h1 class="text-2x1">All Todo list</h1>
        <a href="/todos/create" class="mx-5 py-2 cursor-pointer text-white text-blue-400">
            <span class="fas fa-plus-circle"></span>    
        </a>
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
                   
                     <span class="fas fa-check text-green-400 px-2" 
                     onclick="event.preventDefault();
                     document.getElementById('form-complete-{{$todo->id}}')
                    .submit()"></span>

                    <form style="dispay:none" action="{{route('todo.incomplete', $todo->id)}}" 
                        id="{{'form-incomplete-'.$todo->id}}" method="post">
                        @csrf
                        @method('delete')
                    </form>

                @else
                    <span onclick="event.preventDefault();
                     document.getElementById('form-complete-{{$todo->id}}')
                    .submit()"
                     class="fas fa-check  text-gray-300  cursor-pointer px-2"></span>

                    <form style="dispay:none" action="{{route('todo.complete', $todo->id)}}" 
                        id="{{'form-complete-'.$todo->id}}" method="post">
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