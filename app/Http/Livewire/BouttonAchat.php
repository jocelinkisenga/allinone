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


        $company = \App\Models\Company::find($product['company_id']);
       


		$item = CartFacade::get($product['id']);
		if ($item) {
            $this->dispatchBrowserEvent('swal', [
                "position" => 'top-end',
                "icon" => 'warning',
                "title" => 'ce produit existe dans le panier',
                "showConfirmButton" => false,
                "timer" => 1500
            ]);

		} else {
			CartFacade::add([
					'id'=>$product['id'],
					'name'=>$product['name'],
					'price'=> $product['price'],
				 	'quantity' => 1,
                    'company'=> $company->name,
			])->associate("App\Models\Product");
            $this->emit("cardcounter");
		}




    }
}
