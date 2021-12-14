<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Product;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $data = Products::paginate(20);
        return view('product.products',compact('data'));
    }
    public function women(){
        $data = Products::where('kategori_id', '!=',2)->get();
        
        return view('product.women',compact('data'));
    }
    public function men(){
        $data = Products::where('kategori_id', '!=',1)->get();
        
        return view('product.men',compact('data'));
    }
}
