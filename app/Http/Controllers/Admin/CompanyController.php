<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\Manager\CompanyRepositoryInterface;

class CompanyController extends Controller
{
    public function __construct(
        public CompanyRepositoryInterface $repo,
    ){
      
    }
    public function index(){
        $companies = $this->repo->getContents();
        return view('Admin.pages.Company.companies',compact('companies'));
    }

    public function store(Request $request){
        $this->repo->createData($request);
        return redirect()->back();
    }
}
