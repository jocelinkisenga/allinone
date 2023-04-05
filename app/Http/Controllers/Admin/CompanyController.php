<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    oublic function index(){
        $companies = Company::latest()->get();
        return view('Admin.pages.Company.companies',compact('companies'));
    }
}
