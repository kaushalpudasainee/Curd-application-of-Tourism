@extends('layout.main')

@section('content')
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    @foreach($CustomerList as $value)
    <tr>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->address}}</td>
        <td>
            <a href="{{url('/edit/'.$value->id)}}">Edit</a>
            <a href="{{url('/delete/'.$value->id)}}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
