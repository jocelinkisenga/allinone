<?php
declare(strict_types=1);

namespace App\Contracts\Assets;

interface UploadFileInterface {
    public function uploadfile($data);
}