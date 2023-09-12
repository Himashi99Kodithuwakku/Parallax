<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function mobiles(){
        return view('categories.mobiles');
    }

    public function add(){
        return view('buy.form');        
    }
    
}
