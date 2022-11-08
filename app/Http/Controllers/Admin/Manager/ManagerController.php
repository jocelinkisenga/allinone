<?php

namespace App\Http\Controllers\Admin\Manager;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index(){
        dd(User::where('role_id',\App\Enums\RoleEnum::MANAGER));
    }
}
