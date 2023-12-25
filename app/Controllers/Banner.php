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
        $where = [
            'idBanner' => $this->request->getPost('idBanner'),
        ];

        $file = $this->request->getFile('gambar');

        // Check if a new file is uploaded
        if ($file->isValid()) {
            $nama_file = $file->getRandomName();

            // Move the uploaded file to the 'file' directory
            $file->move('file', $nama_file);

            $profil = new ModelBanner();
            $data = [
                'gambar' => $nama_file,
            ];

            // Update data in the database
            $profil->updateData($data, $where);

            session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        } else {
            // Handle the case where no file is uploaded
            session()->setFlashdata('pesan', 'Gagal mengunggah gambar. Pastikan Anda memilih file yang benar.');
        }

        return redirect()->to(base_url('banner'));
    }
}
