<?php

namespace App\Http\Controllers\Manager\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
public function __construct()
{
    
}

public function index(){
    return view('Manager.pages.categories.categories');
}

public function create(){

}

public function show(int $id){

}

public function update(CategoryRequest $request, int $id){

}

public function delete(int $id){
    
}

}
