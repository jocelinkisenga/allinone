<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;
use App\Models\Product;

class BouttonAchat extends Component
{
    public $product;
    public function render()
    {
        return view('livewire.boutton-achat');
    }

    public function add($product){





		$item = CartFacade::get($product['id']);
		if ($item) {
                dd("le produit existe déjà");
		} else {
			CartFacade::add([
					'id'=>$product['id'],
					'name'=>$product['name'],
					'price'=> $product['price'],
				 	'quantity' => 1,
			])->associate("App\Models\Product");
		}




    }
}
