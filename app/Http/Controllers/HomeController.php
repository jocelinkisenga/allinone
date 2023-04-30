<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Company;

class HomeController extends Controller
{

    public function index(){
        $compagnies = Company::with('products')->get();
      
        return view('front.index',compact('compagnies'));
    }
}
