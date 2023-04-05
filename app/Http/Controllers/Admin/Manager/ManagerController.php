<?php

namespace App\Http\Controllers\Admin\Manager;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index(){
        $managers = User::latest()->where('role_id',\App\Enums\RoleEnum::MANAGER)->get();

        return view('Admin.pages.Manager.managers',compact('managers'));
    }
}
