@extends('layout.main')

@section('content')
<div>
    <h1>Great Vision</h1>
    <form action="{{route('logout')}}" method="get">
        <button type="submit" >LogOut</button>
    </form>
</div>
@endsection