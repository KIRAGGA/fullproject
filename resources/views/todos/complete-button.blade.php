@if($todo->completed)
                   
                     <span class="fas fa-check text-green-400 cursor-pointer px-2" 
                     onclick="event.preventDefault();
                     document.getElementById('form-incomplete-{{$todo->id}}')
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