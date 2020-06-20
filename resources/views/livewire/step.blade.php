<div>

    <div class="py-2">
        <div class="flex justify-center pb-4 px-4">
            <h1 class="text-lg pb-4"> Add steps if required</h1>
         
        <span wire:click="increment" class="fas fa-plus cursor-pointer px-2 py-1"></span>
        </div>
        <input type="text" name="step" placeholder="steps" class="py-2 px-2 
        rounded border"/>
    </div>

    {{$steps}}
</div>
