<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;

class CardForm extends Component
{

    public  $quantity;
    public $quantity_modify;

    public $contents = [];

    public function render()
    {
        $this->contents = CartFacade::getContent();
        return view('livewire.card-form');
    }

    public function ajout(){
     $this->quantity = $this->quantity +1;
    }

    public function modify(){
        $this->quantity = $this->quantity_modify;
    }
}
