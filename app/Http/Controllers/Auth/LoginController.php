<?php

namespace App\Http\Controllers\Auth;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function create()
   {
      return view('Auth.Login');
   }

   public function login(LoginRequest $request)
   {

      $user = User::whereEmail($request->email)->first();
   
      $request->authenticate();

      $request->session()->regenerate();
      if($user->role_id === RoleEnum::MANAGER){
         return redirect()->route('manager.dashboard');
      }

      if($user->role_id === RoleEnum::ADMIN){
         return redirect()->route('admin.dashboard');
      }



   }

   public function destroy(Request $request)
   {
  
      Auth::guard('web')->logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect()->route('login');
   }
}