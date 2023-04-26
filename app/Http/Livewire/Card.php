<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;

class Card extends Component
{
    public $card_contents;
    public function render()
    {
        $this->card_contents = CartFacade::getContent();
        return view('livewire.card');
    }
}
