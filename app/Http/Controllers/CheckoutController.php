<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * function returns a checkout view
     */
    public function index(){
        return view('front.checkout');
    }
}
