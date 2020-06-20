<div>

    <div class="py-2">
        <div class="flex justify-center pb-4 px-4">
            <h1 class="text-lg pb-4"> Add steps if required</h1>
         <span wire:click="increment" class="fas fa-plus cursor-pointer px-2 py-1"></span>
        </div>
    </div>


        @for ($i = 0; $i < count($steps); $i++)
            <div class="flex justify-center py-2">
                <input type="text" name="step" 
                    placeholder="{{'Describe step '.($i+1)}}" class="py-1 px-2 rounded border"/>   
                    
                    <span class="fas fa-times text-red-400 p-2" wire:click="remove({{$i}})"></span>
            </div>
            @endfor
</div>
