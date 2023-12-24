<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAuth;

class Auth extends BaseController
{
    protected $ModelAuth;

    public function __construct()
    {
        $this->ModelAuth = new ModelAuth();
    }

    public function register()
    {
        $data = array('title' => 'Registrasi');
        return view('auth/register', $data);
    }

    public function saveRegister()
    {
        // Rules validasi
        if ($this->validate([
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
                'rules' => 'required|min_length[8]|max_length[100]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'min_length' => '{field} Minimal 8 karakter',
                ],
            ],
            'repassword' => [
                'label' => 'Password',
                'rules' => 'required|min_length[8]|max_length[100]|matches[password]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'min_length' => '{field} Minimal 8 karakter',
                    'matches' => '{field} Tidak Cocok',
                ],
            ],
        ])) {
            // Jika berhasil ditambahkan
            $data = array(
                'email' => esc($this->request->getVar('email')),
                'username' => esc($this->request->getVar('username')),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'foto' => 'default.png',
                'level' => 2,
            );
            $this->ModelAuth->saveRegister($data);
            session()->setFlashdata('pesan', 'Registrasi Berhasil!');
            return redirect()->to(base_url('/login'));
        } else {
            // Jika tidak berhasil ditambahkan
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/register'));
        }
    }

    public function login()
    {
        $data = array('title' => 'Login');
        return view('auth/login', $data);
    }

    public function checkLogin()
    {
        if ($this->validate([
            'username-email' => [
                'label' => 'Username atau Email',
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ],
            ],
        ])) {
            // Jika Data Valid
            $identity = esc($this->request->getVar('username-email'));
            $password = $this->request->getPost('password');
            $check = $this->ModelAuth->login($identity, $password);
            if ($check) {
                // Jika Datanya Ada
                session()->set('log', true);
                session()->set('email', $check['email']);
                session()->set('username', $check['username']);
                session()->set('foto', $check['foto']);
                session()->set('level', $check['level']);

                return redirect()->to(base_url('/dashboard'));
            } else {
                // Jika Datanya Tidak Ada
                session()->setFlashdata('pesan', 'Username atau Password Tidak Cocok!');
                return redirect()->to(base_url('/login'));
            }
        } else {
            // Jika Data Tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('email');
        session()->remove('username');
        session()->remove('foto');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Berhasil keluar!');
        return redirect()->to(base_url('/login'));
    }
}
