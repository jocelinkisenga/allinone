<?php

namespace App\Http\Controllers\Admin\Manager;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Summary of ManagerController
 */
class ManagerController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $managers = User::latest()->where('role_id',\App\Enums\RoleEnum::MANAGER)->get();
       

        return view('Admin.pages.Manager.managers',compact('managers'));
    }


    public function show(int $id){
        
    }

    /**
     * Summary of activer
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function activer(int $id){
        $manager = User::find($id);
        $manager->update(['status' => 1]);
        return redirect()->back();
    }


    /**
     * Summary of desactiver
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function desactiver(int $id){
        $manager = User::find($id);
        $manager->update(['status' => 0]);
        return redirect()->back();
    }
}
