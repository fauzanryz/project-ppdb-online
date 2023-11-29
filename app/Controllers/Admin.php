<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Dashboard', 
            'isi' => 'Halaman Admin'
        );
        return view('dashboard/admin', $data);
    }
}
