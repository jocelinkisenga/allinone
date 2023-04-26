<?php
namespace App\Repositories\Manager;

use App\Contracts\Assets\UploadFileInterface;
use App\Contracts\Manager\CompanyRepositoryInterface;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Enums\RoleEnum;

class CompanyRepositorie implements CompanyRepositoryInterface {

    public function __construct(
        public UploadFileInterface $upload,
    )
    {
        
    }

    public function getContents(){
       return Company::whereUser_id(Auth::user()->id)->first();
    }

    public function createData($attributes){
        $fileName= time().'.'.$attributes->file('image')->getClientOriginalName();
        $path=$attributes->file('image')->storeAs('uploads', $fileName, 'public');

       $user = User::create([
            'name' => $attributes->name,
            'email' => $attributes->email,
            'password'=> Hash::make($attributes->contact),
            'role_id'=> RoleEnum::MANAGER
        ]);

        Company::create([
            'user_id'=>$user->id,
            'name'=>$attributes->name,
            'description'=>$attributes->description,
            'image'=>$fileName,
            'adress'=>$attributes->adress,
            'contact'=>$attributes->contact
        ]);

 
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