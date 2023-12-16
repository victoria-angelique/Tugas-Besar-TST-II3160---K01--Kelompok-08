<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Rating;
use App\Models\Wahana;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class AnalyticsController extends ResourceController
{
    public function index()
    {
        $model = model(Rating::class);
        $analytics = $model->calculateWahanaRating();
        $wahana = model(Wahana::class);
        $wahanaData = $wahana->getAllWahana();

        $url = getenv('API_URL') . 'api/asal-kota-terbanyak?email=admin@gmail.com&password=admin';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = json_decode(curl_exec($curl), true);
        curl_close($curl);

        $data_domisili = $response['data_kota_terbanyak'];

        if (sizeof($data_domisili) >= 6 ) {
            $data['domisili'] = array_slice($response['data_kota_terbanyak'], 0, 6);
        } else {
            $data['domisili'] = $response['data_kota_terbanyak'];

        }
        $data['analytics'] = $analytics;
        $data['wahana'] = $wahanaData;

        // dd($data);

        return view('analytics', $data);
    }
}
