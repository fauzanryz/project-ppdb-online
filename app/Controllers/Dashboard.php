<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCount;
use App\Models\ModelPendaftar;
use App\Models\ModelUser;

class Dashboard extends BaseController
{
    protected $ModelCount;
    protected $ModelPendaftar;
    protected $ModelUser;
    public function __construct()
    {
        $this->ModelCount = new ModelCount();
        $this->ModelPendaftar = new ModelPendaftar();
        $this->ModelUser = new ModelUser();
    }
    public function index()
    {
        $UserID = $this->ModelUser->where('email', session('email'))->first()['idUser'];
        $data = [
            'title' => 'Dashboard',
            'countPendaftar' => $this->ModelCount->countPendaftar(),
            'countDiterima' => $this->ModelCount->countDiterima(),
            'countPendaftarLakiLaki' => $this->ModelCount->countPendaftarLakiLaki(),
            'countPendaftarPerempuan' => $this->ModelCount->countPendaftarPerempuan(),
            'pendaftarById' => $this->ModelPendaftar->getPendaftarFinalisasi(),
            'pendaftar' => $this->ModelPendaftar->getPendaftarById($UserID),
        ];
        if (!session('email')) {
            dd("Login Dulu");
        }

        if ($data['pendaftar'] == null) {
            $data["status_pendaftar"] = "belum_mendaftar";
        } else {
            if ($data["pendaftar"]["status_daftar"] == "Baru") {
                $data['status_pendaftar'] = "sudah_mendaftar";
            } elseif ($data["pendaftar"]["status_daftar"] == null) {
                $data["status_pendaftar"] = "belum_mendaftar";
            } elseif ($data["pendaftar"]["status_daftar"] == "Ditolak") {
                $data["status_pendaftar"] = "Ditolak";
            } elseif ($data["pendaftar"]["status_daftar"] == "Diterima") {
                $data["status_pendaftar"] = "Diterima";
            } else {
                $data["status_pendaftar"] = "sudah_final";
            }
        }
        // dd(session('email'));

        return view('dashboard/index', $data);
    }
}
