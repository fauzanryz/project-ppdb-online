<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftar;
use App\Models\ModelUser;

class Pendaftar extends BaseController
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
        $data = [
            'title' => 'Pendaftar',
            'judul' => 'Data Pendaftar',
            'pendaftar' => $this->ModelPendaftar->getPendaftarFinalisasi(),
        ];
        return view('pendaftar/index', $data);
    }

    public function detailPendaftar($idPendaftar)
    {
        $data = [
            'title' => 'Pendaftar',
            'judul' => 'Data Pendaftar',
            'pendaftar' => $this->ModelPendaftar->getPendaftar($idPendaftar),
        ];

        return view('pendaftar/detailPendaftar', $data);
    }

    public function formTambahPendaftar()
    {
        $data = [
            'title' => 'Pendaftar',
            'judul' => 'Form Tambah Pendaftar',
            'user' => $this->ModelUser->getUser(),
        ];

        return view('pendaftar/tambahPendaftar', $data);
    }

    public function tambahPendaftar()
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
            'status_daftar' => [
                'label' => 'Status Daftar',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'pasfoto' => [
                'label' => 'Pas Foto',
                'rules' => 'uploaded[pasfoto]|ext_in[pasfoto,pdf]|max_size[pasfoto,2048]',
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

            // Menyimpan ke database
            $this->ModelPendaftar->insert([
                'nama' => htmlspecialchars($this->request->getVar('nama')),
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
                'status_daftar' => 'Finalisasi',
                'pasfoto' => $namaPasFoto,
                'aktaKelahiran' => $namaAktaKelahiran,
                'KK' => $namaKK,
                'ijazahSD' => $namaIjazahSD,
                'idUser' => htmlspecialchars($this->request->getVar('idUser')),
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

    public function editPendaftar($idPendaftar)
    {
        $data = [
            'title' => 'Pendaftar',
            'judul' => 'Form Ubah Pendaftar',
            'pendaftar' => $this->ModelPendaftar->getPendaftar($idPendaftar),
        ];
        return view('pendaftar/editPendaftar', $data);
    }

    public function updatePendaftar()
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
            'status_daftar' => [
                'label' => 'Status Daftar',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'pasfoto' => [
                'label' => 'Pas Foto',
                'rules' => 'uploaded[pasfoto]|ext_in[pasfoto,pdf]|max_size[pasfoto,2048]',
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

            // Menyimpan ke database
            $this->ModelPendaftar->save([
                'nama' => htmlspecialchars($this->request->getVar('nama')),
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
                'status_daftar' => 'Finalisasi',
                'pasfoto' => $namaPasFoto,
                'aktaKelahiran' => $namaAktaKelahiran,
                'KK' => $namaKK,
                'ijazahSD' => $namaIjazahSD,
                'idUser' => htmlspecialchars($this->request->getVar('idUser')),
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('/pendaftarMasuk'));
        } else {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }
}
