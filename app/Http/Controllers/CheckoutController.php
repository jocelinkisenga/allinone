<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Company;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * function returns a checkout view
     */
    public function index(){
        $total = CartFacade::getTotal();
        $count = CartFacade::getTotalQuantity();
        $compagnies = Company::get();
        return view('front.checkout',compact('total','count','compagnies'));
    }

    public function store (Request $request){
        dd($request);
    }
}
