@extends('template/master')

@section('content')
    <div class="mt-3">
        <a href="{{route('tambahproduct')}}"><button class="btn btn-md btn-primary">Tambah Product</button><a/>
    </div>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <td><b>Code</b></td>
                <td><b>Name</b></td>
                <td><b>Price</b></td>
                <td><b>Action</b></td>
            </tr>
        </thead>
        <tbody>
            {{-- @dd($data->original['data']) --}}
            @foreach ($data->original['data'] as $item)
                <tr>
                    <td>{{$item['kode_product']}}</td>
                    <td>{{$item['nama_product']}}</td>
                    <td>{{"Rp " . number_format($item['harga_product'],0,'','.')}}</td>
                    <td>
                        <a href="{{route('editproduct',$item['kode_product'])}}">
                            <button class="btn btn-sm btn-warning">Edit</button>
                        </a>
                        |
                        <a href="{{route('deleteproduct',$item['kode_product'])}}">
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>    
@endsection