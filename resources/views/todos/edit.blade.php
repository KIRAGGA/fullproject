

<div class="text-center pt-10">
   
    <h2 class="text-2x1"> Update Todo list</h2>

    <x-alert/>
    <form method="post" action="{{route('todo.update', $todo->id)}}" class="py-5">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border rounded">
        <input type="submit" value="update" class="p-2 border rounded">
    </form>
    <a href="/todos">Back</a>
</div>