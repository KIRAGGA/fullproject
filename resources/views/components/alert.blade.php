<div>
    {{-- THis is the session error --}}
    {{ $slot }}
    @if (session()->has('message'))

    <div class="alert alert-success">{{session()->get('message')}}</div> 

         @elseif (session()->has('error'))
            <div class="alert alert-danger">{{session()->get('error')}}</div> 
        @endif
            
     @if (session('status'))
            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
    @endif

{{-- This is the error message if the todo form is not validated --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>