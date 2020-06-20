<div>

    <div class="py-2">
        <div class="flex justify-center pb-4 px-4">
            <h1 class="text-lg pb-4"> Add steps if required</h1>
         <span wire:click="increment" class="fas fa-plus cursor-pointer px-2 py-1"></span>
        </div>
    </div>


        @foreach($steps as $step)
            <div class="flex justify-center py-2" wire:key="{{$loop->index}}">
                <input type="text" name="stepName[]" placeholder="{{'Describe step '.($loop->index+1)}}" 
                value="{{$step['name']}}" class="py-1 px-2 rounded border"/>   
                    
            <input type="hidden" name="stepId[]" value="{{$step['id']}}"/>   
                    
                    <span class="fas fa-times text-red-400 p-2" wire:click=
                    "remove({{$loop->index}})"></span>
            </div>
            @endforeach
</div>
