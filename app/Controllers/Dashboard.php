<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCount;

class Dashboard extends BaseController
{
    protected $ModelCount;
    public function __construct()
    {
        $this->ModelCount = new ModelCount();
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'countPendaftar' => $this->ModelCount->countPendaftar(),
            'countDiterima' => $this->ModelCount->countDiterima()
        ];
        return view('dashboard/index', $data);
    }

}
