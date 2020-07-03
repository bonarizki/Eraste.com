@extends('template/master')

@section('content')
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <td><b>Order Code</b></td>
                <td><b>Product</b></td>
                <td><b>Total Order</b></td>
                <td><b>Option</b></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data->original['data'] as $item)
                @if ($item['product']!=null)
                    <tr>
                        <td>{{$item['kode_order']}}</td>
                        <td>{{$item['product']['nama_product']}}</td>
                        <td>{{"Rp ".number_format($item['product']['harga_product'],0,'','.')}}</td>
                        <td>
                            <a href="{{route('editOrder',$item['kode_order'])}}">
                                <button class="btn btn-sm btn-warning">Edit</button>
                            </a>
                            |
                            <a href="{{route('deleteOrder',$item['kode_order'])}}">
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection