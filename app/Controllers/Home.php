<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = array('title' => 'Home');
        return view('freeUser/index', $data);
    }

}
