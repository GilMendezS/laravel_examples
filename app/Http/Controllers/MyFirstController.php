<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function message(){
        return "mi first message from a controller";
    }
}
