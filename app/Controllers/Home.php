<?php

namespace App\Controllers;
use App\Models\Wahana;
class Home extends BaseController
{
    public function index()
    {
        $model = model(Wahana::class);
        $data["wahana"] = $model->getAllWahana();
        return view('home',$data);
    }
}
