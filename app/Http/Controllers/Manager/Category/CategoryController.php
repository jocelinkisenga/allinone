<?php

namespace App\Http\Controllers\Manager\Category;

use App\Contracts\Manager\CategorieRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
public function __construct(
    public  CategorieRepositoryInterface $categorie,
)
{
    
}

public function index(){
    $data = $this->categorie->getContents();
    return view('Manager.pages.categories.categories',compact('data'));
}

public function store(Request $request){
    $this->categorie->createData($request);
    return redirect()->back();
}

public function show(int $id){

}

public function update(CategoryRequest $request, int $id){

}

public function delete(int $id){
    
}

}
