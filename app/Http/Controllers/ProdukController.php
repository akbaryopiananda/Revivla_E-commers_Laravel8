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
}
