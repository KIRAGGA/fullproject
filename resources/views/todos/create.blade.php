@extends('todos.layout')

@section('content')
    <div class="text-center pt-10">
        <h2 class="text-2x1"> What To do?</h2>

        <x-alert/>
        <form method="post" action="/todos/create" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border rounded">
            <input type="submit" value="create" class="p-2 border rounded">
        </form>
        <a href="/todos">Back</a>
@endsection
