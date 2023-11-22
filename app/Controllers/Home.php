<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = array('title' => 'Home', 
                        'isi' => 'home'
                    );
        return view('layout/wrapper', $data);
    }
}
