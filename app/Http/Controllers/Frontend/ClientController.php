<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $orders = Order::where('user_id',Auth::user()->id)->get();
        return view("client.dashboard",compact("orders"));
    }

    public function modify(){
            return view('modify');
    }

    public function store(Request $request){
        // $validated = $request->validate(

        // );
        $user = User::find(Auth::user()->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect()->route('client.profile');
    }
}
