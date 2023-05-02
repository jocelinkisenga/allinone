<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Auth;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $orders = Order::where('user_id',Auth::user()->id)->get();
        return view("client.dashboard",compact("orders"));
    }
}
