<?php

declare(strict_types=1);

namespace App\Contracts\Client;

interface CompanyFrontInterface{

    public function getContents(int $id);
}