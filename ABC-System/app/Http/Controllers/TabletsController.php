<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabletsController extends Controller
{
    public function tablets(){
        return view('categories.tablets');
    }
}
