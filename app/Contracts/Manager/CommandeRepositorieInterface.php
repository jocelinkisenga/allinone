<?php
declare(strict_types=1);

namespace App\Contracts\Manager;

interface CommandeRepositorieInterface{
    
    public function getContents();

    public function getContentById(int $id);

    public function deleteData(int $id);
}