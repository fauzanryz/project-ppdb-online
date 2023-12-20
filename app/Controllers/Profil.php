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

    public function tambah_profil()
    {
        $data = array('title' => 'Form Tambah Data Profil');
        return view('profil/tambahprofil', $data);
    }
    public function proses_tambah()
    {
        $profil  = new ModelProfil();
        $data = [
            'alur_pendaftaran' => $this->request->getPost('alur_pendaftaran'),
            'syarat_pendaftaran' => $this->request->getPost('syarat_pendaftaran'),
            'visi' => $this->request->getPost('visi'),
            'misi' => $this->request->getPost('misi'),
        ];
        $profil->addData($data);
        return redirect()->to(base_url('profil'));
    }


    public function ubah_profil($id_profil)
    {
        $profil  = new ModelProfil();
        $data = [
            'data' => $profil->getDataWhere($id_profil)->getRowArray(),
            'title' => 'Form Ubah Profil'
        ];
        return view('profil/ubahprofil', $data);
    }

    public function proses_ubah()
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
        return redirect()->to(base_url('profil'));
    }

    public function hapus_profil($id_profil)
    {
        $profil  = new ModelProfil();
        $where = [
            'idProfil' => $id_profil
        ];
        $profil->deleteData($where);
        return redirect()->to(base_url('profil'));
    }
}
