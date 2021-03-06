@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2x1">All Todo list</h1>
        <a href="{{route('todo.create')}}" class="mx-5 py-2 cursor-pointer text-white text-blue-400">
            <span class="fas fa-plus-circle"></span>    
        </a>
    </div>
        <ul class="my-5">
            <x-alert/>

         @forelse ($todos as $todo)

            <div class="flex justify-between border-b pb-4">

                <div>
                    @include('todos.complete-button')
                </div>
                    
                    @if ($todo->completed)
                        <p class="line-through">{{$todo->title}}</p>

                    @else
            <a class="cursor-pointer" href="{{route('todo.show', $todo->id)}}">{{$todo->title}}</a>

                    @endif
                <div>
                    
                    <a href="{{route('todo.edit',$todo->id)}}" 
                        class="text-orange-400 cursor-pointer text-white">
                            <span class="fas fa-edit px-2"></span>
                    </a>
                    
                            <span class="fas fa-trash text-red-500 cursor-pointer px-2"
                                                    
                            onclick="event.preventDefault();
                                if(confirm('Do you want to delete this?')){
                                document.getElementById('form-delete-{{$todo->id}}')
                                .submit()}"></span>

                            <form style="dispay:none" action="{{route('todo.destroy', $todo->id)}}" 
                                id="{{'form-delete-'.$todo->id}}" method="post">
                                @csrf
                                @method('delete')
                            </form>
                

                </div>
                
            </div>

            </form>
            @empty
                <p>No task available, please create one.</p>    
         @endforelse
    </ul>
</div>
    
@endsection