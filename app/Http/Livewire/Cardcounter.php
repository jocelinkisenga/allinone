<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;

class Cardcounter extends Component
{
    protected $listeners = ["cardcounter"=> "render"];
    public $items_counter;
    public function render()
    {
        $this->items_counter = CartFacade::getContent()->count();
        return view('livewire.cardcounter');
    }
}