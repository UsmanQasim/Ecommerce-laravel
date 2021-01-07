<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Contracts\Session\Session;

class cartController extends Controller
{
    public function getIndex(){
     
        $product = product::all();
        return view('index', ['products' => $product]);
    
    }
}

    