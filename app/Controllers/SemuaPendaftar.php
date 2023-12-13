<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftar;

class SemuaPendaftar extends BaseController
{
    protected $ModelPendaftar;
    public function __construct()
    {
        $this->ModelPendaftar = new ModelPendaftar();
    }
    public function index()
    {
        $data = [
            'title' => 'Pendaftar Baru',
            'judul' => 'Data Pendaftar Baru',
            'pendaftarBaru' => $this->ModelPendaftar->getPendaftar(),
        ];

        return view('semuaPendaftar/index', $data);
    }
    public function detailSemuaPendaftar($idPendaftar)
    {
        $data = [
            'title' => 'Semua Pendaftar',
            'judul' => 'Data Semua Pendaftar',
            'pendaftar' => $this->ModelPendaftar->getPendaftar($idPendaftar),
        ];

        return view('semuaPendaftar/detailSemuaPendaftar', $data);
    }
    public function hapusSemuaPendaftar($idPendaftar)
    {
        $this->ModelPendaftar->delete($idPendaftar);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus !');
        return redirect()->to(base_url('/semuaPendaftar'));
    }
}
