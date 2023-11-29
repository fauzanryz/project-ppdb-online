<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CalonSiswa extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Dashboard', 
            'isi' => 'Halaman Calon Siswa'
        );
        return view('dashboard/calonsiswa', $data);
    }
}
