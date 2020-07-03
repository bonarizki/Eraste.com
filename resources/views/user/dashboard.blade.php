@extends('template/master')

@section('content')
    <h3 class="mt-5">Product</h3>
    <div class="mt-5">
        <div class="row row-cols-1 row-cols-md-3">
        @php $x = 1 @endphp
        @for ($i = 0; $i < count($data); $i++)
            <div class="col mb-4">
                <div class="card">
                    <img src="{{asset('public/product.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$data[$i]['kode_product']}}</h5>
                        <p class="card-text">{{$data[$i]['nama_product']}}</p>
                        <p class="card-text">{{"Rp. ".number_format($data[$i]['harga_product'],0,'','.')}}</p>
                        <a href="{{route('beliProduk',$data[$i]['kode_product'])}}"><button class="btn btn-success btn-block">Beli</button></a>
                    </div>
                </div>
            </div>
            @if ($x == 3)
        </div>
    </div>
    <div class="mt-5">
        <div class="row row-cols-1 row-cols-md-3">   
            @php $x=0 @endphp
            @endif
        @php $x++ @endphp
        @endfor
        </div>
    </div>
@endsection