<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function laptops(){
        return view('categories.laptops');
    }
}
