@extends('template/master')

@section('content')
    <h3 class="mt-3">Success!</h3>
    <table class="table mt-3 table-borderless">
        <tr>
            <td><h5>Order No</h5></td>
            <td align="right"><h5>{{$data[0]['kode_order']}}</h5></td>
        </tr>
        <tr>
            <td><h5>Product Name</h5></td>
            <td align="right"><h5>{{$data[0]['product']['nama_product']}}</h5></td>
        </tr>
        <tr>
            <td><h5>Order No</h5></td>
            <td align="right"><h5>Qty 1 pc</h5></td>
        </tr>
        <tr>
            <td><h5>Total</h5></td>
            <td align="right"><h5>{{"Rp .".number_format($data[0]['kode_order'],0,'','.')}}</h5></td>
        </tr>
    </table>
    <a href="{{route('dahboard')}}"><button class="btn btn-sm btn-block btn-success">Back To Home</button></a>
@endsection