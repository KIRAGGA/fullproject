<p><a href="/todos/create" class="curso-pointer rounded text-white bg-blue-400">Create New</a></p>

<ul>
@foreach ($todos as $todo)

<li class="flex">
<p>{{$todo->title}} <a href="{{'/todos/'.$todo->id.'/edit'}}" class="bg-orange-400 cursor-pointer rounded text-white">Edit</a></p>

</li>
@endforeach
</ul>