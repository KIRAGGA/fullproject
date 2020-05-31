<div>
    {{ $slot }}
    @if (session()->has('message'))

    <div class="alert alert-success">{{session()->get('message')}}</div> 

         @elseif (session()->has('error'))
            <div class="alert alert-danger">{{session()->get('error')}}</div> 
        @endif
            
     @if (session('status'))
            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
    @endif
</div>