@extends('layout.app')

@section('content')
    <h1>Home Page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt voluptatum sequi ipsam iste reprehenderit itaque inventore eius voluptates odio dolores. Libero quibusdam rem, expedita voluptatem quae veritatis nemo consequuntur aut!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection