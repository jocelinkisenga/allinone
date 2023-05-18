<?php

namespace App\Http\Controllers\Manager\Product;

use App\Contracts\Manager\CategorieRepositoryInterface;
use App\Contracts\Manager\ProductRepositorieInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\ProductRequest;
use App\Models\Product;
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

public function edit(int $id){
    $product = Product::findOrFail($id);
    return view("Manager.pages.Produits.modify",compact("product"));

}

public function update(Request $request){
    $this->product->updateData($request);
    return redirect()->route('manager.products');
}

public function delete(int $id){
    $this->product->deleteData($id);
    return redirect()->back();
}
}
