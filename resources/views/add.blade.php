@extends('layout.main')

@section('content')
    <form action="{{route('addCustomer')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <input type="email" name="email" placeholder="Enter Email">
        <input type="text" name="address" placeholder="Enter address">
        <button type="submit">Add</button>
    </form>
@endsection
