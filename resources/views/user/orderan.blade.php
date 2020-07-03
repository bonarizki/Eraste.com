@extends('template/master')

@section('content')
    <h3 class="mt-5">Order Information</h3>
    <p><h5>{{$data->kode_product}} - {{$data->nama_product}}</h5></p>
    <p><h5>{{"Rp. ".number_format($data->harga_product,0,'','.')}} </h5></p>
    <p><h5>Qty 1 Pcs</h5></p>
    <h3 class="mt-2">Customer Information</h3>
    <form method="post" action="{{route('addProduk')}}">
        {{ csrf_field() }}
        <input type="text" hidden name="kode_product" value="{{$data->kode_product}}">
        <div class="form-group">
          <label>Name</label>
            <input type="text" class="form-control" id="nama_customer" value="{{old('nama_customer')}}" name="nama_customer" placeholder="Nama Customer">
            @error('nama_customer')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
          <label >Phone</label>
          <input type="text" class="form-control" id="phone_number" value="{{old('phone_number')}}" name="phone_number">
            @error('phone_number')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
          <label >Address</label>
          <textarea  type="text" class="form-control" id="alamat_customer" name="alamat_customer">{{old('alamat_customer')}}</textarea>
            @error('alamat_customer')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>

@endsection;