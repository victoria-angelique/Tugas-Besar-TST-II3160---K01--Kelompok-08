<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Rating; 

class RatingController extends ResourceController
{
    
    public function index()
    {
        return view('rating');
    }

    public function create()
    {
        $rating = model(Rating::class);
        
        // ambil body di request
        $ratingValue = $this->request->getVar('rating');
        
        // bikin rating
        $data = $rating->createRating((int)$ratingValue,session()->get('wahanaId'));

        // $response = [
        //     'status' => 'success',
        //     'message' => 'Berhasil membuat rating baru',
        //     'data' => [
        //         'rating' => $data,
        //     ],
        // ];

        // return $this->respond($response, 200);
        return redirect()->to('/rating');
    }

    // public function submitRating()
    // {
    //     $model = new Rating(); // Creating an instance of your Rating model

    //     if ($this->request->getMethod() === 'post') {
    //         $rating = (int)$this->request->getVar('rating'); // Convert to integer
    //         $wahanaId = 1; // Assuming a default value for wahanaId
    //     }
    // }

    public function get()
    {
        $rating = model(Rating::class);
        $data = $rating->getAllRating();

        $response = [
            'status' => 'success',
            'message' => 'Berhasil mengambil data seluruh rating',
            'data' => [
                'count' => count($data),
                'rating' => $data,
            ],
        ];

        return $this->respond($response, 200);
    }

}
