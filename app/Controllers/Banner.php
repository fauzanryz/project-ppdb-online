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

    public function detailEditBanner($id)
    {
        $data = array('title' => 'Form Ubah Data Banner');
        $banner  = new ModelBanner();
        $data = [
            'data' => $banner->getDataWhere($id)->getRowArray(),
            'title' => 'Form Ubah Banner'
        ];
        return view('banner/ubahbanner', $data);
    }

    public function updateBanner()
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
}
