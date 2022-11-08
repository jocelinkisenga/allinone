<?php
namespace App\Repositories\Manager;

use App\Models\Commande;

class CommandeRepositorie {

    public function getContents(){
        return Commande::all();
    }

    public function getContentById(int $id){
        return Commande::findOrFail($id);
    }
    
}