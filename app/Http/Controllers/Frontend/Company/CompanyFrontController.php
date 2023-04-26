<?php

namespace App\Http\Controllers\Frontend\Company;

use App\Contracts\Client\CompanyFrontInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
class CompanyFrontController extends Controller
{
    public function __construct(
        public readonly CompanyFrontInterface $repositorie
    )
    {

    }

    public function index(){
        $compagnies = Company::with('products')->get();
      
        return view('front.listefournisseur',compact('compagnies'));

    }
}
