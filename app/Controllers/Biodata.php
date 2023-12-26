<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftar;
use App\Models\ModelUser;

class Biodata extends BaseController
{
    protected $ModelPendaftar;
    protected $ModelUser;
    public function __construct()
    {
        $this->ModelPendaftar = new ModelPendaftar();
        $this->ModelUser = new ModelUser();
    }
    public function index()
    {
        if (!session('email')) {
            dd("Login Dulu");
        }

        $UserID = $this->ModelUser->where('email', session('email'))->first()['idUser'];
        // Simpan ID pendaftar dalam session
        session()->set('idPendaftar', $UserID);
        $data = [
            'title' => 'Biodata',
            'pendaftar' => $this->ModelPendaftar->getPendaftarById($UserID),
        ];

        if ($data['pendaftar'] == null) {
            $data["status_pendaftar"] = "belum_mendaftar";
        } else {
            if ($data["pendaftar"]["status_daftar"] == "Baru") {
                $data['status_pendaftar'] = "sudah_mendaftar";
            } elseif ($data["pendaftar"]["status_daftar"] == null) {
                $data["status_pendaftar"] = "belum_mendaftar";
            } else {
                $data["status_pendaftar"] = "sudah_final";
            }
        }

        // $status_daftar = $this->ModelPendaftar->getPendaftar();
        // dd($data);

        return view('biodata/index', $data);
    }
    public function tambahBiodata()
    {
        // $data = $this->request->getVar();
        // dd($data);
        $validate = $this->validate([
            // 'nama' => [
            //     'label' => 'Nama',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'jenisKel' => [
            //     'label' => 'Jenis Kelamin',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'tempatLahir' => [
            //     'label' => 'Tempat Lahir',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'tanggalLahir' => [
            //     'label' => 'Tempat Lahir',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'nisn' => [
            //     'label' => 'NISN',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'nik' => [
            //     'label' => 'NIK',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'anakKe' => [
            //     'label' => 'Anak Ke',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'jumlahSaudara' => [
            //     'label' => 'Jumlah Saudara',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'alamat' => [
            //     'label' => 'Alamat',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'noTelp' => [
            //     'label' => 'No Telepon',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'sekolahAsal' => [
            //     'label' => 'Sekolah Asal',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'namaAyah' => [
            //     'label' => 'Nama Ayah',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'namaIbu' => [
            //     'label' => 'Nama Ibu',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'pekerjaanAyah' => [
            //     'label' => 'Pekerjaan Ayah',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'pekerjaanIbu' => [
            //     'label' => 'Pekerjaan Ibu',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'nikAyah' => [
            //     'label' => 'NIK Ayah',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'nikIbu' => [
            //     'label' => 'NIK Ibu',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'penghasilanOrtu' => [
            //     'label' => 'Penghasilan Ortu',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'agamaOrtu' => [
            //     'label' => 'Agama Ortu',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'alamatOrtu' => [
            //     'label' => 'Alamat Ortu',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'pendidikan' => [
            //     'label' => 'Pendidikan',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'namaWali' => [
            //     'label' => 'Nama Wali',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'pekerjaanWali' => [
            //     'label' => 'Pekerjaan Wali',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'agamaWali' => [
            //     'label' => 'Agama Wali',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'alamatWali' => [
            //     'label' => 'Alamat Wali',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            // 'status_daftar' => [
            //     'label' => 'Status Daftar',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
            'pasfoto' => [
                'label' => 'Pas Foto',
                'rules' => 'ext_in[pasfoto,pdf]|max_size[pasfoto,2048]',
                'errors' => [
                    'uploaded' => 'File yang diupload bukan pdf !!!',
                    'ext_in' => 'File yang diupload harus berformat (pdf)',
                    'max_size' => 'Ukuran file terlalu besar !!!',
                ]
            ],
            'aktaKelahiran' => [
                'label' => 'Akta Kelahiran',
                'rules' => 'uploaded[aktaKelahiran]|ext_in[aktaKelahiran,pdf]|max_size[aktaKelahiran,2048]',
                'errors' => [
                    'uploaded' => 'File yang diupload bukan pdf !!!',
                    'ext_in' => 'File yang diupload harus berformat (pdf)',
                    'max_size' => 'Ukuran file terlalu besar !!!',
                ]
            ],
            'KK' => [
                'label' => 'Kartu Keluarga',
                'rules' => 'uploaded[KK]|ext_in[KK,pdf]|max_size[KK,2048]',
                'errors' => [
                    'uploaded' => 'File yang diupload bukan pdf !!!',
                    'ext_in' => 'File yang diupload harus berformat (pdf)',
                    'max_size' => 'Ukuran file terlalu besar !!!',
                ]
            ],
            'ijazahSD' => [
                'label' => 'Ijazah SD',
                'rules' => 'uploaded[ijazahSD]|ext_in[ijazahSD,pdf]|max_size[ijazahSD,2048]',
                'errors' => [
                    'uploaded' => 'File yang diupload bukan pdf !!!',
                    'ext_in' => 'File yang diupload harus berformat (pdf)',
                    'max_size' => 'Ukuran file terlalu besar !!!',
                ]
            ],
            // 'idUser' => [
            //     'label' => 'Id User',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
        ]);

        if ($validate) {
            // Mengunggah file Pas Foto
            $filePasFoto = $this->request->getFile('pasfoto');
            $namaPasFoto = ($filePasFoto->getError() == 4) ? null : $filePasFoto->getRandomName();
            $filePasFoto->move("upload/pasfoto", $namaPasFoto);

            // Mengunggah file Akta Kelahiran
            $fileAktaKelahiran = $this->request->getFile('aktaKelahiran');
            $namaAktaKelahiran = ($fileAktaKelahiran->getError() == 4) ? null : $fileAktaKelahiran->getRandomName();
            $fileAktaKelahiran->move("upload/akta_kelahiran", $namaAktaKelahiran);

            // Mengunggah file Kartu Keluarga
            $fileKK = $this->request->getFile('KK');
            $namaKK = ($fileKK->getError() == 4) ? null : $fileKK->getRandomName();
            $fileKK->move("upload/kartu_keluarga", $namaKK);

            // Mengunggah file Ijazah SD
            $fileIjazahSD = $this->request->getFile('ijazahSD');
            $namaIjazahSD = ($fileIjazahSD->getError() == 4) ? null : $fileIjazahSD->getRandomName();
            $fileIjazahSD->move("upload/ijazah_sd", $namaIjazahSD);

            //Mendapatkan ID USER
            $id_user = $this->ModelUser->where('email', session('email'))->first()['idUser'];
            if ($id_user == null) {
                return redirect()->to(base_url('/login'));
            }
            // dd($id_user);
            // Menyimpan ke database
            $this->ModelPendaftar->insert([
                // 'idPendaftar' => esc($this->request->getVar('idPendaftar')),
                'nama' => esc($this->request->getVar('nama')),
                'jenisKel' => esc($this->request->getVar('jenisKel')),
                'tempatLahir' => esc($this->request->getVar('tempatLahir')),
                'tanggalLahir' => esc($this->request->getVar('tanggalLahir')),
                'nisn' => esc($this->request->getVar('nisn')),
                'nik' => esc($this->request->getVar('nik')),
                'anakKe' => esc($this->request->getVar('anakKe')),
                'jumlahSaudara' => esc($this->request->getVar('jumlahSaudara')),
                'alamat' => esc($this->request->getVar('alamat')),
                'noTelp' => esc($this->request->getVar('noTelp')),
                'sekolahAsal' => esc($this->request->getVar('sekolahAsal')),
                'namaAyah' => esc($this->request->getVar('namaAyah')),
                'namaIbu' => esc($this->request->getVar('namaIbu')),
                'pekerjaanAyah' => esc($this->request->getVar('pekerjaanAyah')),
                'pekerjaanIbu' => esc($this->request->getVar('pekerjaanIbu')),
                'nikAyah' => esc($this->request->getVar('nikAyah')),
                'nikIbu' => esc($this->request->getVar('nikIbu')),
                'penghasilanOrtu' => esc($this->request->getVar('penghasilanOrtu')),
                'agamaOrtu' => esc($this->request->getVar('agamaOrtu')),
                'alamatOrtu' => esc($this->request->getVar('alamatOrtu')),
                'pendidikan' => esc($this->request->getVar('pendidikan')),
                'namaWali' => esc($this->request->getVar('namaWali')),
                'pekerjaanWali' => esc($this->request->getVar('pekerjaanWali')),
                'agamaWali' => esc($this->request->getVar('agamaWali')),
                'alamatWali' => esc($this->request->getVar('alamatWali')),
                'siswaPindahan' => esc($this->request->getVar('siswaPindahan')),
                'suratPindah' => esc($this->request->getVar('suratPindah')),
                'diterimaDiKelas' => esc($this->request->getVar('diterimaDiKelas')),
                'status_daftar' => esc($this->request->getVar('status_daftar')),
                'pasfoto' => $namaPasFoto,
                'aktaKelahiran' => $namaAktaKelahiran,
                'KK' => $namaKK,
                'ijazahSD' => $namaIjazahSD,
                'idUser' => esc($id_user),
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('/biodata'));
        } else {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }

}
