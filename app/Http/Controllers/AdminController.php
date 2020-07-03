<?php

namespace App\Http\Controllers;

use App\User;
use DataTables;
use Crypt;
use App\Http\Requests\adminRequest;
use DB;
// use App\product;
// // use Illuminate\Http\Request;
// use App\Http\Requests\productRequest;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show()
    {
        $data =  Datatables::of(User::all())->make(true);
        return view('admin/listAdmin',compact('data'));
    }

    public function destroy($id)
    {
        DB::transaction(function() use($id) {
            User::find($id)->delete();
        });
        return redirect('/adminList');
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('admin/editAdmin',compact('data'));
    }

    public function update(adminRequest $request)
    {
        DB::transaction(function() use($request) {
            User::find($request->id)->update($request->except(['_token']));
        });
        return redirect('/adminList');
    }
}
