@extends('template/master')

@section('content')
    <div class="mt-3">
        <h3>Edit Form</h3>
        <div class="mb-3">
            <form method="post" action="{{route('orderUpdate')}}">
                {{ csrf_field() }}
                <input type="text" hidden name="kode_order" value="{{$data->kode_order}}">
                <div class="form-group">
                  <label>Name</label>
                    <input type="text" class="form-control" id="nama_customer" value="{{$data->nama_customer}}" name="nama_customer" placeholder="Nama Customer">
                    @error('nama_customer')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                  <label >Phone</label>
                  <input type="text" class="form-control" id="phone_number" value="{{$data->phone_number}}" name="phone_number">
                    @error('phone_number')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                  <label >Address</label>
                  <textarea  type="text" class="form-control" id="alamat_customer" name="alamat_customer">{{$data->alamat_customer}}</textarea>
                    @error('alamat_customer')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection