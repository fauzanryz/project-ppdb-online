<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelProfil;

class Profil extends BaseController
{
    public function index()
    {
        $profilModel = new ModelProfil();
        $data = [
            'title' => 'Data Profil',
            'data' => $profilModel->getData(),
        ];

        return view('profil/index', $data);
    }

    public function detailEditProfil($id_profil)
    {
        $profil  = new ModelProfil();
        $data = [
            'data' => $profil->getDataWhere($id_profil)->getRowArray(),
            'title' => 'Form Ubah Profil'
        ];
        return view('profil/ubahprofil', $data);
    }

    public function updateProfil()
    {
        $profil  = new ModelProfil();
        $where = [
            'idProfil' => $this->request->getPost('idProfil'),
        ];
        $data = [
            'alur_pendaftaran' => $this->request->getPost('alur_pendaftaran'),
            'syarat_pendaftaran' => $this->request->getPost('syarat_pendaftaran'),
            'visi' => $this->request->getPost('visi'),
            'misi' => $this->request->getPost('misi'),
        ];
        $profil->updateData($data, $where);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to(base_url('profil'));
    }
}
