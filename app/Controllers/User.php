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

    public function formTambahUser()
    {
        $data = [
            'title' => 'User',
            'judul' => 'Form Tambah User',
        ];

        return view('user/tambahUser', $data);
    }

    public function tambahUser()
    {
        $validate = $this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required|max_length[100]|valid_email|is_unique[user.email]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'valid_email' => '{field} Tidak Valid',
                    'is_unique' => '{field} Sudah Terdaftar',
                ],
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|max_length[100]|alpha_numeric|is_unique[user.username]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'alpha_numeric' => 'Hanya karakter alfanumerik yang diperbolehkan pada {field}',
                    'is_unique' => '{field} Sudah Terdaftar',
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|max_length[100]',
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
                'email' => esc($this->request->getVar('email')),
                'username' => esc($this->request->getVar('username')),
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

    public function detailEditUser($idUser)
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
        $user = $this->ModelUser->getUser($idUser);

        if (isset($user['email'])) {
            $newEmail = $this->request->getVar('email');
            $newUsername = $this->request->getVar('username');
            $newPassword = $this->request->getVar('password');
            $fileFoto = $this->request->getFile('foto');

            // Check if email is changed
            if ($user['email'] == $newEmail) {
                $ruleEmail = 'required';
            } else {
                // Validate new email and check for uniqueness
                $ruleEmail = 'required';
                $emailExists = $this->ModelUser->checkEmailExists($newEmail);

                if ($emailExists) {
                    return redirect()->back()->withInput()->with('error', 'Email sudah terdaftar');
                }
            }
            // Check if username is changed
            if ($user['username'] == $newUsername) {
                $ruleUsername = 'required';
            } else {
                // Validate new username and check for uniqueness
                $ruleUsername = 'required';
                $usernameExists = $this->ModelUser->checkUsernameExists($newUsername);

                if ($usernameExists) {
                    return redirect()->back()->withInput()->with('error', 'Username sudah terdaftar');
                }
            }
            // Check if new password is provided
            $rulePassword = 'max_length[100]';
            if (!empty($newPassword)) {
                $rulePassword = 'required|' . $rulePassword;
            }

            $validate = $this->validate([
                'email' => [
                    'label' => 'Email',
                    'rules' => $ruleEmail,
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                        'valid_email' => '{field} Tidak Valid',
                        'is_unique' => '{field} Sudah Terdaftar',
                    ],
                ],
                'username' => [
                    'label' => 'Username',
                    'rules' => $ruleUsername,
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                        'alpha_numeric' => 'Hanya karakter alfanumerik yang diperbolehkan pada {field}',
                        'is_unique' => '{field} Sudah Terdaftar',
                    ],
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => $rulePassword,
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                        'matches' => 'Konfirmasi password tidak sesuai',
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

            if ($validate) {
                // Check if new photo is uploaded
                if ($fileFoto->getError() == 4) {
                    // No new file uploaded, use the existing photo name
                    $namaFoto = $user['foto'];
                } else {
                    // Delete the old photo if it's not the default image
                    if ($user['foto'] != 'default.png') {
                        // Check if the old photo exists before unlinking
                        $oldPhotoPath = 'img/' . $user['foto'];
                        if (file_exists($oldPhotoPath)) {
                            unlink($oldPhotoPath);
                        }
                    }
                    // Upload the new photo
                    $namaFoto = $fileFoto->getRandomName();
                    $fileFoto->move('img', $namaFoto);
                }

                // Save the data
                $dataToSave = [
                    'idUser' => $idUser,
                    'email' => esc($newEmail),
                    'username' => esc($newUsername),
                    'foto' => $namaFoto,
                    'level' => 2,
                ];

                // Save new password only if provided
                if (!empty($newPassword)) {
                    $dataToSave['password'] = password_hash($newPassword, PASSWORD_BCRYPT);
                }

                $this->ModelUser->save($dataToSave);

                session()->setFlashdata('pesan', 'Data Berhasil Diubah');
                return redirect()->to(base_url('/kelolaUser'));
            } else {
                session()->setFlashdata('errors', $this->validator->listErrors());
                return redirect()->back()->withInput();
            }
        } else {
            return redirect()->back()->withInput()->with('errors', 'Data pengguna tidak ditemukan');
        }
    }
}
