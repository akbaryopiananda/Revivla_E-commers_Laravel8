<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Alert;

class UserController extends Controller
{
    public function index(){
        $data = Users::all();
        return view('admin.user.edit', compact('data'));
    }

    public function edituser(Request $request){
        $data = Users::find(Auth::user()->id);
        if($data) { 
            $data->name = $request['name'];
            $data->nomor = $request['nomor'];
            $data->alamat = $request['alamat'];
            $data->email = $request['email'];

            if($request['profil']){
                $request['profil']->move('img/profile/', $request['profil']->getClientOriginalName());
                $data->profil = $request['profil']->getClientOriginalName();
                $data->save();
            }
            $data->save();
            Alert::success('Sukses', 'Data User Berhasil diedit');
            return redirect()->route('user');
        } else {
            return redirect()->back();
        }
    }

    public function editpassword(){
        $data = Users::all();
        Alert::warning('Info', 'Selalu ingat Password Anda');
        return view('auth.passwords.edit', compact('data'));
    }
    public function ubahpassword(Request $request){
        $data = Users::find(Auth::user()->id);
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        
        $data->update(['password'=> Hash::make($request->new_password)]);
        Alert::success('Sukses', 'Data Password User Berhasil diedit');
        return redirect()->route('editpassword');
    }
    public function customer(){
        $data = Users::paginate(10);

        return view('customer.index', compact('data'));
    }
    public function detailuser($id){
        $data = Users::where('id',$id)->get();
        return view('customer.detailuser',compact('data'));
    }
}
