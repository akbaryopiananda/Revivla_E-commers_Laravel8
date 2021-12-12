<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    use HasFactory;
    public function produk(){
        return $this->belongsTo('App\Models\Products','produk_id','id');
    }
    public function pesanan(){
        return $this->hasMany('App\Models\Pesanan','pesanan_id','id');
    }
}
