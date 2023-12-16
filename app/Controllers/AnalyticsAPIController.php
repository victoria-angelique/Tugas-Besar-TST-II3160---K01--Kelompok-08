<?php

namespace App\Controllers;

use App\Models\Rating;
use App\Models\User;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;

class AnalyticsAPIController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        if (!model(User::class)->validatePassword($username, $password)) {
            $response = [
                'status' => 'error',
                'message' => 'Credential salah!'
            ];
            return $this->respond($response, 403);
        }

        $Analytics = model(Rating::class);
        $data = $Analytics->calculateWahanaRating();

        $response = [
            'status' => 'success',
            'message' => 'Berhasil mengambil data seluruh Analytics',
            'data' => [
                'count' => count($data),
                'Analytics' => $data,
            ],
        ];

        return $this->respond($response, 200);
    }

    /**
     * Return the properties of a resource object
     *
     * @return ResponseInterface
     */
    public function show($wahanaId = null)
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        if (!model(User::class)->validatePassword($username, $password)) {
            $response = [
                'status' => 'error',
                'message' => 'Credential salah!'
            ];
            return $this->respond($response, 403);
        }
        
        $Analytics = model(Rating::class);
        $data = $Analytics->calculateWahanaRatingById($wahanaId);

        if ($data == null) {
            $response = [
                'status' => 'error',
                'message' => 'ID tidak ditemukan',
            ];
            return $this->respond($response, 400);
        }

        $response = [
            'status' => 'success',
            'message' => 'Berhasil mengambil data seluruh Analytics',
            'data' => [
                'Analytics' => $data,
            ],
        ];
        return $this->respond($response, 200);
    }
}
