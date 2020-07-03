<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\order;
use DataTables;
use App\Http\Requests\orderRequest;
use DB;

class GeneralController extends Controller
{
    public function index()
    {
        $data = DataTables::of(product::all())->make(true)->original['data'];
        return view('user/dashboard',compact('data'));
    }

    public function show($id)
    {
        $data = product::where(["kode_product"=>$id])->first();
        return view('user/orderan',compact('data'));
    }

    public function store(orderRequest $request)
    {
        $id=null;
        $data = $request->except(['_token']);
        DB::transaction(function () use($data,&$id) {
            $insert = order::create($data);
            $id=$insert->id;
            return $id;
        });
        return redirect('/reportOrder/'.$id);
    }

    public function report($id)
    {
        $data = DataTables::of(order::with('product')->where(["kode_order"=>$id]))->make(true)->original['data'];
        return view('user/report',compact('data'));
    }
}
