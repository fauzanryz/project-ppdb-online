<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftar;

class PendaftarDiterima extends BaseController
{
    protected $ModelPendaftar;
    public function __construct()
    {
        $this->ModelPendaftar = new ModelPendaftar();
    }
    public function index()
    {
        $data = [
            'title' => 'Pendaftar Diterima',
            'judul' => 'Data Pendaftar Diterima',
            'pendaftarDiterima' => $this->ModelPendaftar->getPendaftarDiterima(),
        ];

        return view('pendaftarDiterima/index', $data);
    }
    public function detailPendaftarDiterima($idPendaftar)
    {
        $data = [
            'title' => 'Pendaftar Diterima',
            'judul' => 'Data Pendaftar Diterima',
            'pendaftar' => $this->ModelPendaftar->getPendaftar($idPendaftar),
        ];

        return view('pendaftarDiterima/detailPendaftarDiterima', $data);
    }
    public function hapusPendaftarDiterima($idPendaftar)
    {
        $this->ModelPendaftar->delete($idPendaftar);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus !');
        return redirect()->to(base_url('/pendaftarDiterima'));
    }
}
