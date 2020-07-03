<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use DataTables;
use App\Http\Requests\orderRequest;
use DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
       $data = DataTables::of(order::with('product')->get())->make(true);
       return view('orderAdmin/orderList',compact('data'));
    }

    public function destroy($id)
    {
         DB::transaction(function() use($id) {
             order::where('kode_order',$id)->delete();
         });
        return redirect('orderList');
    }

    public function edit($id)
    {
        $data = order::where(["kode_order"=>$id])->first();
        return view('orderAdmin/editOrder',compact('data'));
    }

    public function update(orderRequest $request)
    {
        DB::transaction(function() use($request) {
            order::where(["kode_order"=>$request->kode_order])->update($request->except(['_token']));
        });
        return redirect('orderList');
    }
}
