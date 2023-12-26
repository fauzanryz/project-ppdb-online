<?php

namespace App\Controllers;

use App\Models\ModelBanner;
use App\Models\ModelProfil;

class Home extends BaseController
{
    public function index()
    {
        $banner  = new Modelbanner();
        $profil  = new Modelprofil();
        $data = [
            'data' => $banner->getData(),
            'profil' => $profil->getDataprofil(),
            'title' => 'Home'
        ];
        return view('freeUser/index', $data);
    }
}
