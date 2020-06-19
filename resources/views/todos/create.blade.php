@extends('todos.layout')

@section('content')
    <div class="text-center pt-10">
        <h1 class="text-2x1 border-b pb-4border-b pb-4"> What To do?</h1>

        <x-alert/>
        <form method="post" action="{{route('todo.create')}}" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border rounded">
            <input type="submit" value="create" class="p-2 border rounded">
        </form>
    <a href="{{route('todo.index')}}">Back</a>
@endsection
