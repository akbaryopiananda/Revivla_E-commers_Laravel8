<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Alert;
class CategoryController extends Controller
{
    public function index(){
        $data = Category::paginate(5);
        return view('admin.category.index', compact('data'));
    }
    public function addcategory(){
        return view('admin.category.add');
    }
    public function tambahcategory(Request $request){
        
        Category::create($request->all());
        Alert::success('Sukses', 'Data Category Berhasil ditambah');
        return redirect()->route('category');
    }
    public function editcategory($id){
        $data = Category::find($id);
        return view('admin.category.edit', compact('data'));
    }
    public function updatecategory(Request $request, $id){
        $data = Category::find($id);
        $data->update($request->all());
        Alert::success('Sukses', 'Data Category Berhasil diedit');
        return redirect()->route('category');
    }
    public function deletecategory($id){
        $data = Category::find($id);
        $data->delete();
        Alert::success('Sukses', 'Data Category Berhasil ditambah');
        return redirect()->route('category');
    }
}
