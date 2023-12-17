<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Rating;
use App\Models\Wahana;
use CodeIgniter\HTTP\ResponseInterface;

class AnalyticsController extends BaseController
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
        $response = curl_exec($curl);
        curl_close($curl);

        if ($response != false) {
            $data_domisili = json_decode($response, true)['data_kota_terbanyak'];
            if (sizeof($data_domisili) >= 6 ) {
                $data['domisili'] = array_slice($data_domisili, 0, 6);
            } else {
                $data['domisili'] = $data_domisili;
            }
        }

        $data['analytics'] = $analytics;
        $data['wahana'] = $wahanaData;

        // dd($data);

        return view('analytics', $data);
    }
}
