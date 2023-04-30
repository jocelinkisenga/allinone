<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Company;
use App\Models\Order;
use App\Models\OrderDetails;
use Auth;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CheckoutController extends Controller
{

    public int $a = 0;
    /**
     * function returns a checkout view
     */
    public function index(){
        $total = CartFacade::getTotal();
        $count = CartFacade::getTotalQuantity();
        $compagnies = Company::get();
        return view('front.checkout',compact('total','count','compagnies'));
    }

    public function store (Request $request){
       $order  = Order::create([
            'user_id' => Auth::user()->id,
            'company_id' => $request->company_id,
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'number_phone' => $request->number_phone,
            'country' => $request->country,
            'town' => $request->town,
            'address_physique' => $request->address_physique,
            'address_livraison' => $request->address_livraison
       ]);

    $contents = CartFacade::getContent();
        try {

                foreach($contents as $content){
                    OrderDetails::create([
                        'order_id'=>$order->id,
                        'product_id'=> $content['id'],
                        'quantity' => $content['quantity'],
                    ]);
                }



        } catch (\Throwable $th) {
            throw $th;
        }

        CartFacade::clear();
        return redirect()->route('home');

    }
}
