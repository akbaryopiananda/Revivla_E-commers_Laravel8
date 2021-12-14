<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Products;
use App\Models\Category;
use App\Models\Pesanan;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Users::count();
        $category = Category::count();
        $prod = Products::count();
        $pesan = Pesanan::count();
        return view('home', compact('user','category','prod','pesan'));
    }
}
