<?php
namespace App\Repositories\Manager;

use App\Contracts\Manager\CategorieRepositoryInterface;
use App\Contracts\Manager\CompanyRepositoryInterface;
use App\Models\Category;
use App\Models\Product;

class CategorieRepositorie implements CategorieRepositoryInterface {

    public function __construct(
        public CompanyRepositoryInterface $company,
        
    )
    {
        
    }

    public function getContents(){
        return Category::whereCompany_id($this->company->getContents()->id)->get();
    }

    public function createData($attributes){
        Category::create([
            'company_id'=>$this->company->getContents()->id,
            'name'=>$attributes->name
        ]);
    }

    public function getContentById(int $id){
        return Category::findOrFail($id);
    }

    public function updateData(int $id, $attributes){
        $categorie = Category::find($id);
        $categorie->update($attributes);
    }

    public function deleteData(int $id){
        $categorie = Category::find($id);
        $categorie->delete();
    }
    
}