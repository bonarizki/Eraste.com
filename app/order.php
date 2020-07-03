<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    protected $fillable = [
        'kode_product', 'nama_customer', 'phone_number', 'alamat_customer'
    ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function product()
    { 
        return $this->belongsTo('App\product','kode_product','kode_product'); 
    }
}
