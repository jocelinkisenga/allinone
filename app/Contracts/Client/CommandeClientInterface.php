<?php

declare(strict_types=1);

namespace App\Contracts\Client;

interface CommandeClientInterface {
    public function getContents();

    public function createData($attributes);

    public function updateQuantity(int $id, int $productId, $quantity);

    public function deleteData(int $id);
}