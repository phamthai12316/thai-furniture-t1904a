<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        return view('index');
    }
    public function shop(){
        return view('shop');
    }

    public function productDetail(){
        return view('product-details');
    }

    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }

}
