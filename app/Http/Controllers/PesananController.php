<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Alert;

class PesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id){
        $produk = Products::where('id', $id)->first();
        return view ('pesanan.index', compact('produk'));
    }
    public function pesan(Request $request, $id)
    {
        $produk = Products::where('id', $id)->first();
        $tanggal = Carbon::now();
        // cek stok dan pesanan
        if($request->jumlah_pesan > $produk->stok){
            Alert::error('Stok produk tidak mencukupi', 'Stok');
            return redirect('pesanan/'.$id);
        }
        // cek pesanan ada
        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        // simpan data pesanan
        if(empty($cek_pesanan)){
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumlah_harga = 0;
            $pesanan->kode = mt_rand(100, 999);
            $pesanan->save();
        }

        // save pesanan detail
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        // cek pesanan_detail
        $cek_pesanan_detail = PesananDetail::where('produk_id', $produk->id)->where('pesanan_id', $pesanan_baru->id)->first();

        if(empty($cek_pesanan_detail)){
            $pesanan_detail = new PesananDetail;
            $pesanan_detail->produk_id = $produk->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $produk->harga*$request->jumlah_pesan;
            $pesanan_detail->save();
        } else {
            $pesanan_detail = PesananDetail::where('produk_id', $produk->id)->where('pesanan_id', $pesanan_baru->id)->first();

    		$pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

    		//harga sekarang
    		$harga_pesanan_detail_baru = $produk->harga*$request->jumlah_pesan;
	    	$pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
	    	$pesanan_detail->update();
        }
        // jumlah total
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    	$pesanan->jumlah_harga = $pesanan->jumlah_harga+$produk->harga*$request->jumlah_pesan;
    	$pesanan->update();
        
        Alert::success('Pesanan Berhasil Masuk Keranjang', 'Success');
        return redirect('check_out');

    }

    public function check_out(){
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

            return view('cart.cart', compact('pesanan', 'pesanan_details'));
        } 
        return view('cart.cart', compact('pesanan'));
    }
    public function delete($id){
        $pesanan_detail = PesananDetail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();

        if($pesanan->jumlah_harga == 0)
        {
            $pesanan->delete();
        }
        $pesanan_detail->delete();

        Alert::error('Pesanan Sukses Dihapus', 'Hapus');
        return redirect('/check_out');
    }
    public function konfirmasi(){
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            Alert::error('Identitasi Harap dilengkapi', 'Error');
            return redirect('/user');
        }

        if(empty($user->nomor))
        {
            Alert::error('Identitasi Harap dilengkapi', 'Error');
            return redirect('/user');
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $produk = Products::where('id', $pesanan_detail->produk_id)->first();
            $produk->stok = $produk->stok-$pesanan_detail->jumlah;
            $produk->update();
        }



        Alert::success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('sukses');
    }
    public function sukses(){
        Alert::success('Jangan Lupa Bayar Pesanan Anda', 'Sukses');
        return view('cart.sukses');
    }

    public function pembayaran($id){
        $pembayaran = Pesanan::where('id', $id)->first();
        $pembayaran->status = 2;
        $pembayaran->update();

        Alert::success('Pembayaran berhasil dikonfirmasi', 'Sukses');
        return redirect('pengiriman');
    }
    public function pengiriman($id){
        $pembayaran = Pesanan::where('id', $id)->first();
        $pembayaran->status = 3;
        $pembayaran->update();

        Alert::success('Produk Sedang dikirim', 'Konfirmasi Kepada Pelanggan');
        return redirect('pengiriman');
    }
}
