<?php

namespace App\Http\Controllers\Manager\Company;

use App\Contracts\Manager\CompanyRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\CompanyRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct(
        public CompanyRepositoryInterface $repo,
    )
{
    
}

public function index(){
    $data = $this->repo->getContents();
    return view('Manager.pages.compangies.companies',compact('data'));
}

public function store(Request $request){
    $this->repo->createData($request);
    return redirect()->back();
}

public function show(int $id){

}

public function update(Request $request, int $id){

}

public function delete(int $id){
    
}
}
