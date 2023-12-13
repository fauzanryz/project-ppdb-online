<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCount;
use App\Models\ModelPendaftar;

class Dashboard extends BaseController
{
    protected $ModelCount;
    protected $ModelPendaftar;
    public function __construct()
    {
        $this->ModelCount = new ModelCount();
        $this->ModelPendaftar = new ModelPendaftar();
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'countPendaftar' => $this->ModelCount->countPendaftar(),
            'countDiterima' => $this->ModelCount->countDiterima(),
            'countPendaftarLakiLaki' => $this->ModelCount->countPendaftarLakiLaki(),
            'countPendaftarPerempuan' => $this->ModelCount->countPendaftarPerempuan(),
            'pendaftar' => $this->ModelPendaftar->getPendaftarFinalisasi(),
        ];
        return view('dashboard/index', $data);
    }
}
