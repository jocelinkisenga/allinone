<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;

class CardForm extends Component
{

    public  $quantity ;
    public $quantity_modify;

    public $contents = [];

    public int $total_price ;

    public function render()
    {
        $this->contents = CartFacade::getContent();
        $this->subtotal = CartFacade::getSubTotal();
        $this->total_price = CartFacade::getTotal();
      
        return view('livewire.card-form');
    }

    public function ajout(){
     $this->quantity = $this->quantity +1;
    }

    public function modify(){
        $this->quantity = $this->quantity_modify;
    }

    public function add($id){
        $product = CartFacade::update($id,['quantity' => $this->quantity]);
        $this->vider();

    }

    private function vider(){
        $this->quantity;
    }


}
