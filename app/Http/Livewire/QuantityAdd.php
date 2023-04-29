<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QuantityAdd extends Component
{
    public int $product_id;
    public int $quantity;
    public function render()
    {

        return view('livewire.quantity-add');
    }

    public function add($id){
        dd($id);
    }
}
