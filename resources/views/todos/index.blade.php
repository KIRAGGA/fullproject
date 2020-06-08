<ul>
@foreach ($todos as $todo)

<li>
{{$todo->title}}
</li>
@endforeach
</ul>