@extends('template/master')

@section('content')
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <td><b>Nama</b></td>
                <td><b>Email</b></td>
                <td><b>Action</b></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data->original['data'] as $item)
                <tr>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['email']}}</td>
                    <td>
                        <a href="{{route('editAdmin',$item['id'])}}">
                            <button class="btn btn-sm btn-warning">Edit</button>
                        </a>
                        |
                        <a href="{{route('deleteAdmin',$item['id'])}}">
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection