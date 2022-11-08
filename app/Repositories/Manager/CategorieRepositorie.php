<?php
namespace App\Repositories\Manager;

use App\Contracts\Manager\CategorieRepositoryInterface;
use App\Models\Category;
use App\Models\Product;

class CategorieRepositorie implements CategorieRepositoryInterface {

    public function getContents(){
        return Category::all();
    }

    public function createData($attributes){
        Category::create($attributes);
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