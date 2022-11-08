<?php
declare(strict_types=1);

namespace App\Contracts\Manager;

interface CategorieRepositoryInterface{
    
    public function getContents();

    public function getContentById(int $id);

    public function createData($attributes);
    
    public function updateData(int $id, $attributes);

    public function deleteData(int $id);
}