<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
       dd(Company::all());
    }

    public function show(int $id){
        dd(Company::find($id));
    }
}
