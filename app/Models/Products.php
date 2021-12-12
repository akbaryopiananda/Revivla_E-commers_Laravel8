<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function kategori(){
        return $this->belongsTo(Category::class);
    }
    public function pesanan_detail(){
        return $this->hasMany('App\Models\PesananDetail','product_id', 'id');
    }
}
