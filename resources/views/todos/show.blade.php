@extends('todos.layout')

@section('content')

        <div class="flex justify-between border-b pb-4 px-4">
            <h1 class="text-2x1 pb-4"> {{$todo->title}}</h1>
         <a href="{{route('todo.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
        <span class="fas fa-arrow-left"></span>
        </a>
        </div>
    

    <div>
        <div>
            <h3 class="text-lg">Description</h3>
            <p>{{$todo->description}}</p>
        </div>

        <div class="py-4">
            
            @if ($todo->steps->count() > 0)
            {

                @foreach ($todo->steps as $step)
                    <p>{{$step->name}}</p>
                @endforeach
            }
                
            @endif
        </div>
    </div>
   
@endsection
