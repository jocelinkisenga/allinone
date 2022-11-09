<?php

namespace App\Http\Controllers\Auth;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('Auth.Login');
    }

    public function login(LoginRequest $request){

        $request->authenticate();

       $request->session()->regenerate();
        
     if ($request->role_id === RoleEnum::ADMIN) {
        return redirect()->route('admin.dashboard');
     }else if($request->role_id === RoleEnum::MANAGER){
        return redirect()->route('manager.dashboard');
     }elseif($request->role_id == RoleEnum::CLIENT){
        return redirect()->route('home');
     }
         
    }
}
