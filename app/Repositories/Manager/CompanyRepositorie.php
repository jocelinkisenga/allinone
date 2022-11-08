<?php
namespace App\Repositories\Manager;

use App\Contracts\Manager\CompanyRepositoryInterface;
use App\Models\Company;

class CompanyRepositorie implements CompanyRepositoryInterface {

    public function getContents(){
       return Company::all();
    }

    public function createData($attributes){
        Company::create($attributes);
    }

    public function getContentById(int $id){
        return Company::findOrFail($id);
    }

    public function updateData(int $id, $attributes){
        $company = Company::find($id);
        $company->update($attributes);
    }

    public function deleteData(int $id){
        $company = Company::find($id);
        $company->delete();
    }
    
}