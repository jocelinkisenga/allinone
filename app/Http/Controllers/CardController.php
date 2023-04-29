<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(){
            return view('front.cart');
    }

    public function store(Request $request){
        dd($request);
    }
}
