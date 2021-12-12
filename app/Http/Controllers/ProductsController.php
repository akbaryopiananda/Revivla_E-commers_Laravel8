<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Alert;
class ProductsController extends Controller
{
    public function index(){
        $data = Products::with('kategori')->paginate(2);
        return view('admin.product.index', compact('data'));
    }
    public function editproduct($id){
        $data = Products::with('kategori')->find($id);
        $pilih = Category::all();
        return view('admin.product.edit', compact('data','pilih'));
    }
    public function updateproduct(Request $request, $id){
        $data = Products::find($id);
        $data->nama = $request['nama'];
        $data->deskripsi = $request['deskripsi'];
        $data->harga = $request['harga'];
        $data->stok = $request['stok'];
        if($request['gambar']){
            $request['gambar']->move('img/product/', $request['gambar']->getClientOriginalName());
            $data->gambar = $request['gambar']->getClientOriginalName();
        }
        $data->kategori_id = $request['kategori_id'];
        $data->save();
        Alert::success('Sukses', 'Data Product Berhasil diupdate');
        return redirect()->route('products');
    }
    public function deleteproduct($id){
        $data = Products::find($id);

        $data->delete();
        Alert::success('Sukses', 'Data Product Berhasil dihapus');
        return redirect()->route('products');
    }
    public function addproduct(){
        return view('admin.product.add');
    }
    public function tambahproduct(Request $request){
        $data = new Products();
        $data->nama = $request['nama'];
        $data->deskripsi = $request['deskripsi'];
        $data->harga = $request['harga'];
        $data->stok = $request['stok'];
        if($request['gambar']){
            $request['gambar']->move('img/product/', $request['gambar']->getClientOriginalName());
            
            $data->gambar = $request['gambar']->getClientOriginalName();
        }
        $data->kategori_id = $request['kategori_id'];
        $data->save();
        Alert::success('Sukses', 'Data Product Berhasil ditambah');
        return redirect()->route('products');
    }
    public function showproduct($id){
        $data = Products::find($id);
        return view('admin.product.show', compact('data'));
    }
}
