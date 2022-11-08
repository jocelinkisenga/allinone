<?php

namespace App\Http\Controllers\Manager\Commande;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function __construct()
{
    
}

public function index(){
    return view('Manager.pages.commandes.commandes');
}


public function show(int $id){

}




}
