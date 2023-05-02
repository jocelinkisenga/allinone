<?php

namespace App\Http\Controllers\Manager\Commande;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use App\Models\Company;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    public function __construct()
{

}

public function index(){
    $company = Company::where('user_id',Auth::user()->id)->first();
    $orders = Order::where('company_id',$company->id)->where('affecter',1)->get();
    return view('Manager.pages.commandes.commandes',compact('orders'));
}


public function show(int $id){

}

public function confirmer(int $id){
    $commande = Order::findOrFail($id);
    $commande->update(['livrer' => 1]);
    return redirect()->back();
}


}
