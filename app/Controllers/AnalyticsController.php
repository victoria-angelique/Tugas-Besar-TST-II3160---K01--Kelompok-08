<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Rating;
use CodeIgniter\HTTP\ResponseInterface;

class AnalyticsController extends BaseController
{
    public function index()
    {
        $model = model(Rating::class);
        $analytics = $model->calculateWahanaRating();

        $data['analytics'] = $analytics;

        // dd($data);

        return view('analytics', $data);
    }
}
