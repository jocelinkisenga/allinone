<?php
declare(strict_types=1);
namespace App\Repositories\Manager;

use App\Contracts\Manager\CompanyRepositoryInterface;
use App\Contracts\Manager\ProductRepositorieInterface;
use App\Models\Product;

class ProductRepositorie implements ProductRepositorieInterface {

    public function __construct(
        public CompanyRepositoryInterface $company,
    )
    {
        
    }

    public function getContents(){
        if($this->company->getContents() != null){
            return Product::whereCompany_id($this->company->getContents()->id)->get();
        }
       
    }

    public function createData($attributes){
        $fileName= time().'.'.$attributes->file('image')->getClientOriginalName();
        $path=$attributes->file('image')->storeAs('uploads', $fileName, 'public');

        Product::create([
            'categorie_id'=>$attributes->categorie_id,
            'company_id'=>$this->company->getContents()->id,
            'name'=>$attributes->name,
            'price'=>$attributes->price,
            'image'=>$fileName
        ]);
   
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