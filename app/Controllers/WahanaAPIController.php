<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Wahana;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;

class WahanaAPIController extends ResourceController
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

        $wahana = model(Wahana::class);
        $data = $wahana->getAllWahana();

        $response = [
            'status' => 'success',
            'message' => 'Berhasil mengambil data seluruh wahana',
            'data' => [
                'count' => count($data),
                'wahana' => $data,
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
        
        $wahana = model(Wahana::class);
        $data = $wahana->getWahanaById($wahanaId);

        if ($data == null) {
            $response = [
                'status' => 'error',
                'message' => 'ID tidak ditemukan',
            ];
            return $this->respond($response, 400);
        }

        $response = [
            'status' => 'success',
            'message' => 'Berhasil mengambil data seluruh wahana',
            'data' => [
                'wahana' => $data,
            ],
        ];
        return $this->respond($response, 200);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $wahana = model(Wahana::class);
        
        // ambil body di request
        $nama = $this->request->getVar('nama');
        $kapasitas = $this->request->getVar('kapasitas');
        
        // bikin wahananya
        $data = $wahana->createWahana($nama, $kapasitas);

        $response = [
            'status' => 'success',
            'message' => 'Berhasil membuat wahana baru',
            'data' => [
                'wahana' => $data,
            ],
        ];

        return $this->respond($response, 200);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return ResponseInterface
     */
    public function update($wahanaId = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return ResponseInterface
     */
    public function delete($wahanaId = null)
    {
        //
    }
}
