<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBanner;

class Banner extends BaseController
{
    public function index()
    {
        $banner  = new ModelBanner();
        $data = array('title' => ' Data Banner');
        $data['data'] = $banner->getData();

        return view('banner/index', $data);
    }


    public function tambah_banner()
    {
        $data = array('title' => 'Form Tambah Data Banner');

        return view('banner/tambahbanner', $data);
    }

    public function proses_tambah()
    {
        $file = $this->request->getFile('foto');
        $nama_file = $file->getRandomName();

        $file->move('file', $nama_file);
        $profil  = new ModelBanner();
        $data = [
            'gambar' => $nama_file,
        ];
        $profil->addData($data);
        return redirect()->to(base_url('banner'));
    }


    public function ubah_banner($id)
    {
        $data = array('title' => 'Form Ubah Data Banner');
        $banner  = new ModelBanner();
        $data = [
            'data' => $banner->getDataWhere($id)->getRowArray(),
            'title' => 'Form Ubah Banner'
        ];
        return view('banner/ubahbanner', $data);
    }

    public function proses_ubah()
    {
        // $data = $this->request->getVar();
        // dd($data);
        $where = [
            'idBanner' => $this->request->getPost('idBanner'),
        ];
        $file = $this->request->getFile('foto');
        $nama_file = $file->getRandomName();

        $file->move('file', $nama_file);
        $profil  = new ModelBanner();
        $data = [
            'gambar' => $nama_file,
        ];
        $profil->updateData($data, $where);
        return redirect()->to(base_url('banner'));
    }

    public function hapus_banner($id)
    {
        $banner  = new ModelBanner();
        $where = [
            'id' => $id
        ];
        $banner->deleteData($where);
        return redirect()->to(base_url('banner'));
    }
}
