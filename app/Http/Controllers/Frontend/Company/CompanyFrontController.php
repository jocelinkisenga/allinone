<?php

namespace App\Http\Controllers\Frontend\Company;

use App\Contracts\Client\CompanyFrontInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyFrontController extends Controller
{
    public function __construct(
        public readonly CompanyFrontInterface $repositorie
    )
    {
        
    }

    // public function index(string $slug, int $id){
    //     return response()->json($this->repositorie->getContents($id));
    // }
}
