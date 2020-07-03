@extends('template/master')

@section('content')
    <div class="mt-3">
        <h3>Edit Form</h3>
        <div class="mb-3">
            <form method="post" action="{{route('productUpdate')}}">
                {{ csrf_field() }}
                <input type="text" hidden name="kode_product" value="{{$data->kode_product}}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="nama_product" value="{{$data->nama_product}}" name="nama_product" placeholder="Nama Barang">
                    @error('nama_product')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Price</label>
                  <input type="text" class="form-control" id="harga_product" value={{$data->harga_product}} name="harga_product" placeholder="Harga Barang">
                    @error('harga_product')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection