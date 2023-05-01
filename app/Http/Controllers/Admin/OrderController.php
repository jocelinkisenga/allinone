<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){

        $orders = Order::latest()->with('order_details')->get();
        return view("Admin.pages.orders.orders",compact('orders'));
    }

    public function show(int $id){
        $orders = OrderDetails::whereOrder_id($id)->get();
        $order = Order::findOrFail($id);
        return view("Admin.pages.orders.orderDetails",compact("orders","order"));
    }
}
