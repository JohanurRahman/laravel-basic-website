@extends('layout.app') 
@section('content')


<form method="POST" action="contact/submit">

    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" id="message" rows="4"></textarea>
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Submit</button>

    <br>
    <br>

</form>

@endsection