<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftar;

class Pendaftar extends BaseController
{
    protected $ModelPendaftar;
    public function __construct(){
        $this->ModelPendaftar = new ModelPendaftar();
    }
    public function index()
    {
        $data = [
            'title' => 'Pendaftar',
            'judul' => 'Data Pendaftar',
            'pendaftar' => $this->ModelPendaftar->getPendaftar()
        ];
        return view('pendaftar/index', $data);
    }

    public function formTambahPendaftar()
    {
        $data = [
            'title' => 'Pendaftar',
            'judul' => 'Form Tambah Pendaftar',
            'pendaftar' => $this->ModelPendaftar->getPendaftar()
        ];

        return view('pendaftar/tambahPendaftar', $data);
    }

    public function tambahPendaftar()
    {
        $validate = $this->validate([
            'nama'=>[
                'label'=>'Nama',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'jenisKel'=>[
                'label'=>'Jenis Kelamin',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'tempatLahir'=>[
                'label'=>'Tempat Lahir',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'tanggalLahir'=>[
                'label'=>'Tempat Lahir',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'nisn'=>[
                'label'=>'NISN',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'nik'=>[
                'label'=>'NIK',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'anakKe'=>[
                'label'=>'Anak Ke',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'jumlahSaudara'=>[
                'label'=>'Jumlah Saudara',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'alamat'=>[
                'label'=>'Alamat',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'noTelp'=>[
                'label'=>'No Telepon',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'sekolahAsal'=>[
                'label'=>'Sekolah Asal',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'namaAyah'=>[
                'label'=>'Nama Ayah',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'namaIbu'=>[
                'label'=>'Nama Ibu',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'pekerjaanAyah'=>[
                'label'=>'Pekerjaan Ayah',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'pekerjaanIbu'=>[
                'label'=>'Pekerjaan Ibu',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'nikAyah'=>[
                'label'=>'NIK Ayah',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'nikIbu'=>[
                'label'=>'NIK Ibu',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'penghasilanOrtu'=>[
                'label'=>'Penghasilan Ortu',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'agamaOrtu'=>[
                'label'=>'Agama Ortu',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'alamatOrtu'=>[
                'label'=>'Alamat Ortu',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'pendidikan'=>[
                'label'=>'Pendidikan',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'namaWali'=>[
                'label'=>'Nama Wali',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'pekerjaanWali'=>[
                'label'=>'Pekerjaan Wali',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'agamaWali'=>[
                'label'=>'Agama Wali',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'alamatWali'=>[
                'label'=>'Alamat Wali',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'status_daftar'=>[
                'label'=>'Status Daftar',
                'rules'=>'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],

            // 'pasfoto' => [
            //     'label' => 'Pas Foto',
            //     'rules' => 'uploaded[file]|ext_in[file,pdf]|max_size[file,2048]',
            //     'errors' => [
            //         'uploaded' => 'File yang diupload bukan file !!!',
            //         'ext_in' => 'File yang diupload harus berformat (pdf)',
            //         'max_size' => 'Ukuran file terlalu besar !!!',
            //     ]
            // ],
            // 'aktaKelahiran' => [
            //     'label' => 'Akta Kelahiran',
            //     'rules' => 'uploaded[file]|ext_in[file,pdf]|max_size[file,2048]',
            //     'errors' => [
            //         'uploaded' => 'File yang diupload bukan file !!!',
            //         'ext_in' => 'File yang diupload harus berformat (pdf)',
            //         'max_size' => 'Ukuran file terlalu besar !!!',
            //     ]
            // ],
            // 'fotoKK' => [
            //     'label' => 'Kartu Keluarga',
            //     'rules' => 'uploaded[file]|ext_in[file,pdf]|max_size[file,2048]',
            //     'errors' => [
            //         'uploaded' => 'File yang diupload bukan file !!!',
            //         'ext_in' => 'File yang diupload harus berformat (pdf)',
            //         'max_size' => 'Ukuran file terlalu besar !!!',
            //     ]
            // ],
            // 'ijazahSD' => [
            //     'label' => 'Ijazah SD',
            //     'rules' => 'uploaded[file]|ext_in[file,pdf]|max_size[file,2048]',
            //     'errors' => [
            //         'uploaded' => 'File yang diupload bukan file !!!',
            //         'ext_in' => 'File yang diupload harus berformat (pdf)',
            //         'max_size' => 'Ukuran file terlalu besar !!!',
            //     ]
            // ],
        ]);

        if ($validate) {
            $this->ModelPendaftar->insert([
                'nama' => htmlspecialchars($this->request->getVar('nama')) ,
                'jenisKel' => htmlspecialchars($this->request->getVar('jenisKel')),
                'tempatLahir' => htmlspecialchars($this->request->getVar('tempatLahir')),
                'tanggalLahir' => htmlspecialchars($this->request->getVar('tanggalLahir')),
                'nisn' => htmlspecialchars($this->request->getVar('nisn')),
                'nik' => htmlspecialchars($this->request->getVar('nik')),
                'anakKe' => htmlspecialchars($this->request->getVar('anakKe')),
                'jumlahSaudara' => htmlspecialchars($this->request->getVar('jumlahSaudara')),
                'alamat' => htmlspecialchars($this->request->getVar('alamat')),
                'noTelp' => htmlspecialchars($this->request->getVar('noTelp')),
                'sekolahAsal' => htmlspecialchars($this->request->getVar('sekolahAsal')),
                'namaAyah' => htmlspecialchars($this->request->getVar('namaAyah')),
                'namaIbu' => htmlspecialchars($this->request->getVar('namaIbu')),
                'pekerjaanAyah' => htmlspecialchars($this->request->getVar('pekerjaanAyah')),
                'pekerjaanIbu' => htmlspecialchars($this->request->getVar('pekerjaanIbu')),
                'nikAyah' => htmlspecialchars($this->request->getVar('nikAyah')),
                'nikIbu' => htmlspecialchars($this->request->getVar('nikIbu')),
                'penghasilanOrtu' => htmlspecialchars($this->request->getVar('penghasilanOrtu')),
                'agamaOrtu' => htmlspecialchars($this->request->getVar('agamaOrtu')),
                'alamatOrtu' => htmlspecialchars($this->request->getVar('alamatOrtu')),
                'pendidikan' => htmlspecialchars($this->request->getVar('pendidikan')),
                'namaWali' => htmlspecialchars($this->request->getVar('namaWali')),
                'pekerjaanWali' => htmlspecialchars($this->request->getVar('pekerjaanWali')),
                'agamaWali' => htmlspecialchars($this->request->getVar('agamaWali')),
                'alamatWali' => htmlspecialchars($this->request->getVar('alamatWali')),
                'siswaPindahan' => htmlspecialchars($this->request->getVar('siswaPindahan')),
                'suratPindah' => htmlspecialchars($this->request->getVar('suratPindah')),
                'diterimaDiKelas' => htmlspecialchars($this->request->getVar('diterimaDiKelas')),
                'status_daftar' => htmlspecialchars($this->request->getVar('status_daftar')),
                'pasfoto' => htmlspecialchars($this->request->getVar('pasfoto')),
                'aktaKelahiran' => htmlspecialchars($this->request->getVar('aktaKelahiran')),
                'fotoKK' => htmlspecialchars($this->request->getVar('fotoKK')),
                'ijazahSD' => htmlspecialchars($this->request->getVar('ijazahSD')),
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('/pendaftarMasuk'));
        } else {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }

    public function hapusPendaftar($idPendaftar)
    {
        $this->ModelPendaftar->delete($idPendaftar);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus !');
        return redirect()->to(base_url('/pendaftarMasuk'));
    }

    public function detailPendaftar($idPendaftar)
    {
        $data = [
            'title' => 'Pendaftar',
            'judul' => 'Data Pendaftar',
            'pendaftar' => $this->ModelPendaftar->getPendaftar($idPendaftar)
        ];

        return view('pendaftar/detailPendaftar', $data);
    }

    public function pendaftarDiterima()
{
    $data = [
        'title' => 'Pendaftar Diterima',
        'judul' => 'Data Pendaftar Diterima',
        'pendaftarDiterima' => $this->ModelPendaftar->getPendaftarDiterima(),
    ];

    return view('pendaftar/pendaftarDiterima', $data);
}
    public function pendaftarDitolak()
{
    $data = [
        'title' => 'Pendaftar Ditolak',
        'judul' => 'Data Pendaftar Ditolak',
        'pendaftarDitolak' => $this->ModelPendaftar->getPendaftarDitolak(),
    ];

    return view('pendaftar/pendaftarDitolak', $data);
}
    public function pendaftarBaru()
{
    $data = [
        'title' => 'Pendaftar Baru',
        'judul' => 'Data Pendaftar Baru',
        'pendaftarBaru' => $this->ModelPendaftar->getPendaftarBaru(),
    ];

    return view('pendaftar/pendaftarBaru', $data);
}

}
