<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class HomeController extends Controller
{
    public function index(){
        $compagnies  = Company::latest()->get();
        return view('front.index',compact('compagnies'));
    }
}
