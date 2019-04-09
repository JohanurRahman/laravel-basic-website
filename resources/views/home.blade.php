@extends('layout.app') 

@section('content')

<h1>Home</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, fugit aliquam? Perspiciatis officiis voluptates iusto
    voluptatem atque. Temporibus praesentium maiores ab voluptas voluptates ipsam repellendus tenetur, aspernatur impedit
    ut totam.
</p>
@endsection


 
@section('sidebar') @parent
<p>This is appended to the sidebar</p>
@endsection