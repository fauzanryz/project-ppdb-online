<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = array('title' => 'Dashboard');
        return view('templates/dashboardTemplate', $data);
    }

}
