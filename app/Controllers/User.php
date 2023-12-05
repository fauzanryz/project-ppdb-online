<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class User extends BaseController
{
    protected $ModelUser;

    public function __construct()
    {
        $this->ModelUser = new ModelUser();
    }
    public function index()
    {
        $data = [
            'title' => 'User',
            'judul' => 'Data User',
            'user' => $this->ModelUser->getUser()
        ];
        return view('/user/index', $data);
    }

    public function detailUser($idUser)
    {
        $data = [
            'title' => 'User',
            'judul' => 'Data User',
            'user' => $this->ModelUser->getUser()
        ];

        if (empty($data['user'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User dengan id : ' . $idUser .  ' Tidak Ditemukan');
        }

        return view('user/detailUser', $data);
    }

    public function formTambahUser()
    {
        $data = [
            'title' => 'User',
            'judul' => 'Form Tambah User',
            'user' => $this->ModelUser->getUser()
        ];

        return view('user/tambahUser', $data);
    }

    public function tambahUser()
    {
        $validate = $this->validate([
            'email'=>[
                'label'=>'Email',
                'rules'=>'required|max_length[100]|valid_email|is_unique[user.email]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'valid_email' => '{field} Tidak Valid',
                    'is_unique' => '{field} Sudah Terdaftar',
                ],
            ],
            'username'=>[
                'label'=>'Username',
                'rules'=>'required|max_length[100]|alpha_numeric|is_unique[user.username]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'alpha_numeric' => 'Hanya karakter alfanumerik yang diperbolehkan pada {field}',
                    'is_unique' => '{field} Sudah Terdaftar',
                ],
            ],
            'password'=>[
                'label'=>'Password',
                'rules'=>'required|max_length[100]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ], 
            'foto' => [
                'label' => 'Foto',
                'rules' => 'is_image[foto]|max_size[foto,2048]|mime_in[foto,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran foto terlalu besar !!!',
                    'is_image' => 'File yang diupload bukan foto !!!',
                    'mime_in' => 'File yang diupload harus berformat (JPG/JPEG/PNG)'
                ]
            ],
        ]);

        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            $namaFoto = $fileFoto->getRandomName();
            $fileFoto->move('img', $namaFoto);
        }

        if ($validate) {
            $this->ModelUser->insert([
                'email' => htmlspecialchars($this->request->getVar('email')) ,
                'username' => htmlspecialchars($this->request->getVar('username')),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'foto' => $namaFoto,
                'level' => 2,
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('/kelolaUser'));
        } else {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }

    public function hapusUser($idUser)
    {
        $this->ModelUser->delete($idUser);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus !');
        return redirect()->to(base_url('/kelolaUser'));
    }

    public function editUser($idUser)
    {
        $data = [
            'title' => 'User',
            'judul' => 'Form Ubah User',
            'user' => $this->ModelUser->getUser($idUser),
        ];
        return view('user/editUser', $data);
    }

    public function updateUser($idUser)
    {
        $validate = $this->validate([
            'email'=>[
                'label'=>'Email',
                'rules'=>'required|max_length[100]|valid_email',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'valid_email' => '{field} Tidak Valid',
                    'is_unique' => '{field} Sudah Terdaftar',
                ],
            ],
            'username'=>[
                'label'=>'Username',
                'rules'=>'required|max_length[100]|alpha_numeric',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'alpha_numeric' => 'Hanya karakter alfanumerik yang diperbolehkan pada {field}',
                    'is_unique' => '{field} Sudah Terdaftar',
                ],
            ],
            'password'=>[
                'label'=>'Password',
                'rules'=>'required|max_length[100]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ], 
            'foto' => [
                'label' => 'Foto',
                'rules' => 'is_image[foto]|max_size[foto,2048]|mime_in[foto,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran foto terlalu besar',
                    'is_image' => 'File yang diupload bukan foto',
                    'mime_in' => 'File yang diupload harus berformat (JPG/JPEG/PNG)'
                ]
            ],
        ]);

        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            $namaFoto = $fileFoto->getRandomName();
            $fileFoto->move('img', $namaFoto);
        }


        if ($validate) {
            $this->ModelUser->save([
                'idUser' => $idUser,
                'email' => htmlspecialchars($this->request->getVar('email')) ,
                'username' => htmlspecialchars($this->request->getVar('username')),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'foto' => $namaFoto,
                'level' => 2,
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Diubah');
            return redirect()->to(base_url('/kelolaUser'));
        } else {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }

}
