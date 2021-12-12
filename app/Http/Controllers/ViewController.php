<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class ViewController extends Controller
{
    public function index(){
        $data = Users::all();
        return view('index', compact('data'));
    }
}
