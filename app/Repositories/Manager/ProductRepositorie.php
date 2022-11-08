<?php
declare(strict_types=1);
namespace App\Repositories\Manager;

use App\Contracts\Manager\ProductRepositorieInterface;
use App\Models\Product;

class ProductRepositorie implements ProductRepositorieInterface {

    public function getContents(){
        return Product::all();
    }

    public function createData($attributes){
        Product::create($attributes);
    }

    public function getContentById(int $id){
        return Product::findOrFail($id);
    }

    public function updateData(int $id, $attributes){
        $product = Product::find($id);
        $product->update($attributes);
    }

    public function deleteData(int $id){
        $product = Product::find($id);
        $product->delete();
    }

    
}