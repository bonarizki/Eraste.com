<?php

namespace App\Http\Controllers;

use App\product;
use App\Http\Requests\productRequest;
use DB;
use Illuminate\Http\Request;
use DataTables;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function product()
    {
       return view('product/product');
    }

    public function store(productRequest $request)
    {
        $kode_product = "L".rand();
        $data = [
            "kode_product"=>$kode_product,
            "nama_product"=>$request->nama_product,
            "harga_product"=>$request->harga_product,
        ];
        DB::transaction(function() use($data) {
            product::create($data);
        });
        return redirect('/productList');
    }

    public function show()
    {
        $data = Datatables::of(product::all())->make(true);
        return view('product/listProduct',compact('data'));
    }

    public function edit($id)
    {
        $data = product::where('kode_product',$id)->first();
        return view ('product/editProduct',compact('data'));
    }

    public function update(productRequest $request)
    {
        DB::transaction(function() use($request) {
            product::where('kode_product',$request->kode_product)->update($request->except(['_token']));
        });
        return redirect('/productList');
    }

    public function destroy($id)
    {
        DB::transaction(function() use($id) {
            product::where('kode_product',$id)->delete();
        });
        return redirect('/productList');
    }
}
