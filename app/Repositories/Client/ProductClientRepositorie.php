<?php

declare(strict_types=1);

namespace App\Repositories\Client;

use App\Models\Product;

class ProductClientRepositorie{

    public function subQuantity(int $id, $quantity){

        $product = Product::find($id);
        
        $new_quantity = $product->quantity - $quantity;

            $product->update([
                'quantity'=>$new_quantity
            ]);
        return true;
    }

    public function restoreQuantity(int $id, $quantity){

    }

    public function updateProductQuantity($id){

    }
}