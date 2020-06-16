@extends('todos.layout')

@section('content')
    <a href="/todos/create" class="curso-pointer rounded text-white bg-blue-400">Create New</a>

<ul>
@foreach ($todos as $todo)

    <div class="flex justify-between border-b pb-4">
        {{$todo->title}} 
        <a href="{{'/todos/'.$todo->id.'/edit'}}" class="bg-orange-400 cursor-pointer rounded text-white">
        <span class="fas fa-edit px-2"></span>
        </a>
        {{-- @include('todos.completed-button') --}}
    </div>

</form>


@endforeach
</ul>
</div>
    
@endsection