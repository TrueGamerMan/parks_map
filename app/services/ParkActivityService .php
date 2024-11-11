<?php

namespace App\services;

use App\Models\ParkActivity;

class ParkActivityService extends BaseService {
    public function __construct(ParkActivity $model) {
        $this->model = $model;
    }
}