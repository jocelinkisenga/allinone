<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
       $companies = Company::all();
       return view('Admin.pages.Company.companies',compact('companies'));
    }

    public function show(int $id){
        dd(Company::find($id));
    }
}
