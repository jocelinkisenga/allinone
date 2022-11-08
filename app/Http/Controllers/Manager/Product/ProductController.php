<?php

namespace App\Http\Controllers\Manager\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
{
    
}

public function index(){
    return view('Manager.pages.Produits.products');
}

public function create(){

}

public function show(int $id){

}

public function update(ProductRequest $request, int $id){

}

public function delete(int $id){
    
}
}
