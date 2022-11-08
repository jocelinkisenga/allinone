<?php

declare(strict_types=1);

namespace App\Repositories\Client;

use App\Contracts\Client\CommandeClientInterface;
use App\Models\Commande;

class CommandeClientRepositorie implements CommandeClientInterface{

    public function getContents(){

    }
    public function createData($attributes){
        Commande::create($attributes);
    }

    public function updateQuantity(int $id, int $productId, $quantity){
        
    }

    public function deleteData(int $id){

    }
}