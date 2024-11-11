<?php

namespace App\services;

use App\Models\ParkImage;

class ParkImageService extends BaseService {
    public function __construct(ParkImage $model) {
        $this->model = $model;
    }
}