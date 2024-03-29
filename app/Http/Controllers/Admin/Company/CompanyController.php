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

    
    /**
     * Summary of activer
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function activer(int $id){
        $manager = Company::find($id);
        $manager->update(['status' => 1]);
        return redirect()->back();
    }


    /**
     * Summary of desactiver
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function desactiver(int $id){
        $manager = Company::find($id);
        $manager->update(['status' => 0]);
        return redirect()->back();
    }

    public function show(int $id){
        dd(Company::find($id));
    }
}
