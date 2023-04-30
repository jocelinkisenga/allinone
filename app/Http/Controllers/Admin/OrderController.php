<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){

        $orders = Order::latest()->with('order_details')->get();
        return view("Admin.pages.orders.orders",compact('orders'));
    }
}
