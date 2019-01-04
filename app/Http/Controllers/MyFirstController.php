<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth')->except('profile');
        $this->middleware('auth')->except(['message','customMessage','view']);
    }
    public function message(){
        return "mi first message from a controller";
    }
    public function customMessage($name){
        return "hi $name";
    }
    public function view(){
        return view('MyFirstView');
    }
    public function profile($id){
        return view('Profile', ['id' => $id]);
    }
}
