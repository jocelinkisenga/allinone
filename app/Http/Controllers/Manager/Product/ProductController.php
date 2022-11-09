<?php

namespace App\Http\Controllers\Manager\Product;

use App\Contracts\Manager\CategorieRepositoryInterface;
use App\Contracts\Manager\ProductRepositorieInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(
        public CategorieRepositoryInterface $categorie,
        public ProductRepositorieInterface $product
    )
{
    
}

public function index(){
    $categories = $this->categorie->getContents();
    $products = $this->product->getContents();
    return view('Manager.pages.Produits.products',compact('categories','products'));
}

public function store(Request $request){
   $this->product->createData($request);
    return redirect()->back();
}

public function show(int $id){

}

public function update(ProductRequest $request, int $id){

}

public function delete(int $id){
    
}
}
