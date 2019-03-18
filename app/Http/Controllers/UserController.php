<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    $data['images']=Category::all();
    return view('User.category')->with($data);

    }
}
