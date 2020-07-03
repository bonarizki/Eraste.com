<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class product extends Model
{
    protected $fillable = [
        'kode_product', 'nama_product', 'harga_product',
    ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function order(){
    	return $this->hasMany('App\order','kode_product','kode_product');
    }
}
