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
        $validate = $this->validate([
            'nisn' => [
                'label' => 'NISN',
                'rules' => 'is_unique[data_pendaftar.nisn]',
                'errors' => [
                    'is_unique' => '{field} Sudah Terdaftar',
                ],
            ],
            'nik' => [
                'label' => 'NIK',
                'rules' => 'is_unique[data_pendaftar.nik]',
                'errors' => [
                    'is_unique' => '{field} Sudah Terdaftar',
                ],
            ],
            'nikAyah' => [
                'label' => 'NIK Ayah',
                'rules' => 'is_unique[data_pendaftar.nikAyah]',
                'errors' => [
                    'is_unique' => '{field} Sudah Terdaftar',
                ],
            ],
            'nikIbu' => [
                'label' => 'NIK Ibu',
                'rules' => 'is_unique[data_pendaftar.nikIbu]',
                'errors' => [
                    'is_unique' => '{field} Sudah Terdaftar',
                ],
            ],
            'status_daftar' => [
                'label' => 'Status Daftar',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
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

            // Menyimpan ke database
            $this->ModelPendaftar->insert([
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
                'status_daftar' => 'Finalisasi',
                'pasfoto' => $namaPasFoto,
                'aktaKelahiran' => $namaAktaKelahiran,
                'KK' => $namaKK,
                'ijazahSD' => $namaIjazahSD,
                'idUser' => esc($this->request->getVar('idUser')),
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

    public function detailEditPendaftar($idPendaftar)
    {
        $data = [
            'title' => 'Pendaftar',
            'judul' => 'Form Ubah Pendaftar',
            'pendaftar' => $this->ModelPendaftar->getPendaftar($idPendaftar),
        ];
        return view('pendaftar/editPendaftar', $data);
    }

    public function updatePendaftar($idPendaftar, $idUser = false)
    {
        // $data = $this->request->getVar();
        // dd($data);
        $validate = $this->validate([
            'status_daftar' => [
                'label' => 'Status Daftar',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'pasfoto' => [
                'label' => 'Pas Foto',
                'rules' => 'ext_in[pasfoto,pdf]|max_size[pasfoto,2048]',
                'errors' => [
                    'ext_in' => 'File yang diupload harus berformat (pdf)',
                    'max_size' => 'Ukuran file terlalu besar !!!',
                ]
            ],
            'aktaKelahiran' => [
                'label' => 'Akta Kelahiran',
                'rules' => 'ext_in[aktaKelahiran,pdf]|max_size[aktaKelahiran,2048]',
                'errors' => [
                    'ext_in' => 'File yang diupload harus berformat (pdf)',
                    'max_size' => 'Ukuran file terlalu besar !!!',
                ]
            ],
            'KK' => [
                'label' => 'Kartu Keluarga',
                'rules' => 'ext_in[KK,pdf]|max_size[KK,2048]',
                'errors' => [
                    'ext_in' => 'File yang diupload harus berformat (pdf)',
                    'max_size' => 'Ukuran file terlalu besar !!!',
                ]
            ],
            'ijazahSD' => [
                'label' => 'Ijazah SD',
                'rules' => 'ext_in[ijazahSD,pdf]|max_size[ijazahSD,2048]',
                'errors' => [
                    'ext_in' => 'File yang diupload harus berformat (pdf)',
                    'max_size' => 'Ukuran file terlalu besar !!!',
                ]
            ],
            // 'idUser' => [
            //     'label' => 'idUser',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //     ],
            // ],
        ]);

        if ($validate) {
            $pendaftar = $this->ModelPendaftar->getPendaftar($idPendaftar);
            $filePasfoto = $this->request->getFile('pasfoto');
            $fileAktaKelahiran = $this->request->getFile('aktaKelahiran');
            $fileKK = $this->request->getFile('KK');
            $fileIjazahSD = $this->request->getFile('ijazahSD');

            if ($pendaftar !== null) {

                // Check if new file is uploaded
                if ($filePasfoto->getError() == 4) {
                    // Tidak ada file baru yang diunggah, gunakan nama pasfoto yang sudah ada
                    $namaPasFoto = $pendaftar['pasfoto'];
                } else {
                    // File baru diunggah, periksa dan hapus file lama jika ada
                    $pathFileLama = 'upload/pasfoto/' . $pendaftar['pasfoto'];

                    // Periksa apakah file lama ada sebelum dihapus
                    if (file_exists($pathFileLama)) {
                        // Hapus file lama
                        unlink($pathFileLama);
                    }

                    // Upload file baru
                    $namaPasFoto = $filePasfoto->getRandomName();
                    $filePasfoto->move('upload/pasfoto/', $namaPasFoto);
                }

                // Check if new file is uploaded
                if ($fileAktaKelahiran->getError() == 4) {
                    $namaAktaKelahiran = $pendaftar['aktaKelahiran'];
                } else {
                    // File baru diunggah, periksa dan hapus file lama jika ada
                    $pathFileLama = 'upload/akta_kelahiran/' . $pendaftar['aktaKelahiran'];

                    // Periksa apakah file lama ada sebelum dihapus
                    if (file_exists($pathFileLama)) {
                        // Hapus file lama
                        unlink($pathFileLama);
                    }

                    // Upload 
                    $namaAktaKelahiran = $fileAktaKelahiran->getRandomName();
                    $fileAktaKelahiran->move('upload/akta_kelahiran/', $namaAktaKelahiran);
                }

                // Check if new file is uploaded
                if ($fileKK->getError() == 4) {
                    $namaKK = $pendaftar['KK'];
                } else {
                    // File baru diunggah, periksa dan hapus file lama jika ada
                    $pathFileLama = 'upload/kartu_keluarga/' . $pendaftar['KK'];

                    // Periksa apakah file lama ada sebelum dihapus
                    if (file_exists($pathFileLama)) {
                        // Hapus file lama
                        unlink($pathFileLama);
                    }

                    // Upload 
                    $namaKK = $fileKK->getRandomName();
                    $fileKK->move('upload/kartu_keluarga/', $namaKK);
                }

                //Check if new file is uploaded 
                if ($fileIjazahSD->getError() == 4) {
                    $namaIjazahSD = $pendaftar['ijazahSD'];
                } else {
                    // File baru diunggah, periksa dan hapus file lama jika ada
                    $pathFileLama = 'upload/ijazah_sd/' . $pendaftar['ijazahSD'];

                    // Periksa apakah file lama ada sebelum dihapus
                    if (file_exists($pathFileLama)) {
                        // Hapus file lama
                        unlink($pathFileLama);
                    }

                    // Upload 
                    $namaIjazahSD = $fileIjazahSD->getRandomName();
                    $fileIjazahSD->move('upload/ijazah_sd/', $namaIjazahSD);
                }

                // Menyimpan ke database
                $this->ModelPendaftar->save([
                    'idPendaftar' => $idPendaftar,
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
                ]);

                session()->setFlashdata('pesan', 'Data Berhasil Diubah');
                return redirect()->to(base_url('/pendaftarMasuk'));
            } else {
                session()->setFlashdata('errors', 'Data Berhasil Diubah');
                return redirect()->to(base_url('/pendaftarMasuk'));
            }
        } else {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }
}
