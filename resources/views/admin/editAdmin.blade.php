@extends('template/master')

@section('content')
    <div class="mt-3">
        <h3>Edit Form</h3>
            <form method="post" action="{{route('updateAdmin')}}">
            @csrf
            <input type="text" name="id" value="{{$data->id}}" hidden>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
                @error('name')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$data->email}}">
                @error('email')
                    <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection