@extends('layout.app') 

@section('content')

<h1>Message</h1>

    <br>

    @if (count($messages) > 0)

        @foreach ($messages as $message)

            <div class="list-group">

                <div class="list-group-item">Name: {{ $message->name }}</div>
                <div class="list-group-item">Email: {{ $message->email }}</div>
                <div class="list-group-item">Message: {{ $message->message }}</div>

            </div>
            
            <br>
            
        @endforeach
        
    @endif


@endsection


 
@section('sidebar') @parent
<p>This is appended to the sidebar</p>
@endsection