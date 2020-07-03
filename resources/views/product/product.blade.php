@extends('template/master')

@section('content')
    <div class="mt-3">
        <h3>Create Form</h3>
        <div class="mb-3">
            <form method="post" action="{{route('productInsert')}}">
                {{ csrf_field() }}
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" value="{{ old('nama_product') }}" id="nama_product" name="nama_product" placeholder="Nama Barang">
                    @error('nama_product')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input type="text" class="form-control" value="{{ old('harga_product') }}" id="harga_product" name="harga_product" placeholder="Harga Barang">
                    @error('harga_product')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
    
@endsection
