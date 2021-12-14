<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Products;
use App\Models\Category;
use App\Models\Pesanan;
class ViewController extends Controller
{
    public function index(){
        $user = Users::count();
        $category = Category::count();
        $prod = Products::count();
        $pesan = Pesanan::count();
        $produks = Products::paginate(3);
        return view('index', compact('produks','user','category', 'prod', 'pesan'));
    }
}
