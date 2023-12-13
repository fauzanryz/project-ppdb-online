<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftar;

class PendaftarDitolak extends BaseController
{
    protected $ModelPendaftar;
    public function __construct()
    {
        $this->ModelPendaftar = new ModelPendaftar();
    }
    public function index()
    {
        $data = [
            'title' => 'Pendaftar Ditolak',
            'judul' => 'Data Pendaftar Ditolak',
            'pendaftarDitolak' => $this->ModelPendaftar->getPendaftarDitolak(),
        ];

        return view('pendaftarDitolak/index', $data);
    }
    public function detailPendaftarDitolak($idPendaftar)
    {
        $data = [
            'title' => 'Pendaftar Ditolak',
            'judul' => 'Data Pendaftar Ditolak',
            'pendaftar' => $this->ModelPendaftar->getPendaftar($idPendaftar),
        ];

        return view('pendaftarDitolak/detailPendaftarDitolak', $data);
    }
    public function hapusPendaftarDitolak($idPendaftar)
    {
        $this->ModelPendaftar->delete($idPendaftar);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus !');
        return redirect()->to(base_url('/pendaftarDitolak'));
    }
}
