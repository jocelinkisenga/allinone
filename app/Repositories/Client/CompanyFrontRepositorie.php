<?php

declare(strict_types=1);

namespace App\Repositories\Client;

use App\Contracts\Client\CompanyFrontInterface;
use App\Contracts\Manager\CommandeRepositorieInterface;
use App\Models\Company;

class CompanyFrontRepositorie implements CompanyFrontInterface {

    public function getContents(int $id){
        return Company::whereId($id)->with('categories')->get();
    }
}