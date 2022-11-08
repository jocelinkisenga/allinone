<?php

namespace App\Http\Controllers\Frontend\Commande;

use App\Contracts\Client\CommandeClientInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommandeRequest;
use App\Repositories\Client\CommandeClientRepositorie;
use Illuminate\Http\Request;

class CommandeFrontController extends Controller
{
    public function __construct(
        public readonly CommandeClientInterface $repositorie,
    )
    {

    }
    public function index(){
        $this->repositorie->getContents();
    }

    public function store(CommandeRequest $request){
        $this->repositorie->createData($request);
    }
}
