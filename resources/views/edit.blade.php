@extends('layout.main')
@section('content')
    <h1>Edit Record</h1>
    <div class="d-flex justify-content-center">
        <form action="{{route('updateRecord')}}" method="post">
            @csrf
            <div class="input-group">
                <input type="text" name="name" class="form-control" value="{{$data->name}}">
                <input type="email" name="email" class="form-control" value="{{$data->email;}}">
                <input type="text" name="address" class="form-control" value="{{$data->address}}">
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="input-group-append">
                    <button type="submit" class="button">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection