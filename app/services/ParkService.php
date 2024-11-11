<?php

namespace App\services;

use App\Models\Park;

class ParkService extends BaseService {
    public function __construct(Park $model) {
        $this->model = $model;
    }
}