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
            <div class="py-1">
                <input type="text" name="title" class="py-2 px-2 border rounded">
            </div>

            <div class="py-1">
                <textarea type="text" name="description" placeholder="Description" class="py-2 px-2 rounded border"></textarea>
            </div>

            <div class="py-2">
                <div class="flex justify-center pb-4 px-4">
                    <h1 class="text-lg pb-4"> Add steps if required</h1>
                 
                <span class="fas fa-plus cursor-pointer px-2 py-1"></span>
                </div>
                <input type="text" name="step" placeholder="steps" class="py-2 px-2 
                rounded border"/>
            </div>

            <div class="py-1">
                <input type="submit" value="create" class="p-2 border rounded">
            </div>
            
        </form>
        @livewire('counter')



        @livewireScripts
    </div>
   
@endsection
