@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    You are logged in!
                </div>

                <div class="card-body">
                    <x-alert>
                        <p>this is a message from alert</p>
                    </x-alert>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image"/>
                        <input type="submit" value="Upload"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
