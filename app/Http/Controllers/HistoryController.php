<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use App\Models\User;
use Auth;
class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();

    	return view('history.index', compact('pesanans'));
    }

    public function detail($id)
    {
    	$pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

     	return view('history.detail', compact('pesanan','pesanan_details'));
    }
    public function pesanan(){
        $pesanans = Pesanan::paginate(5);
        // $pesanans = Pesanan::where('status', '!=',0)->get();
    	return view('history.pesanan', compact('pesanans'));
    }
    public function pesanandetail($id)
    {
    	$pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

     	return view('history.pesanandetail', compact('pesanan','pesanan_details'));
    }
    public function pengiriman(){
        $pesanans = Pesanan::where('status', '!=',1)->get();
    	return view('history.pengiriman', compact('pesanans'));
    }
}
