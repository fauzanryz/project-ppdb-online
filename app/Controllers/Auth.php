<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAuth;

class Auth extends BaseController
{
    public function __construct(){
        $this->ModelAuth = new ModelAuth();
    }

    public function register()
    {
        $data = array('title' => 'Register');
        return view('auth/register');
    }

    public function saveRegister(){
        // Rules validasi
        if($this->validate([
            'email'=>[
                'label'=>'Email',
                'rules'=>'required|max_length[50]',
                'errors' => [
                    'required' => '{field} wajib diisi',
                ],
            ],
            'username'=>[
                'label'=>'Username',
                'rules'=>'required|max_length[30]',
                'errors' => [
                    'required' => '{field} wajib diisi',
                ],
            ],
            'password'=>[
                'label'=>'Password',
                'rules'=>'required|max_length[255]',
                'errors' => [
                    'required' => '{field} wajib diisi',
                ],
            ],
            'repassword'=>[
                'label'=>'Password',
                'rules'=>'required|max_length[255]|matches[password]',
                'errors' => [
                    'required' => '{field} wajib diisi',
                    'matches' => '{field} tidak sama',
                ],
            ],
        ])){
            // Jika berhasil ditambahkan
            $data = array(
                'email' => htmlspecialchars($this->request->getPost('email')),
                'username' => htmlspecialchars($this->request->getPost('username')),
                'password' => password_hash($this->request->getPost('password'),PASSWORD_BCRYPT),
                'foto' => 'profil.jpg',
                'level' => 2
            );
            $this->ModelAuth->saveRegister($data);
            session()->setFlashdata('pesan', 'Registrasi Berhasil!');
            return redirect()->to(base_url('register'));
        }else{
            // Jika tidak berhasil ditambahkan
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('register'));
        }
    }

    public function login(){
        $data = array('title' => 'Login');
        return view('auth/login');
    }

    public function checkLogin(){
        if($this->validate([
            'email'=>[
                'label'=>'Email',
                'rules'=>'required|max_length[50]',
                'errors' => [
                    'required' => '{field} wajib diisi',
                ],
            ],
            'password'=>[
                'label'=>'Password',
                'rules'=>'required|max_length[255]',
                'errors' => [
                    'required' => '{field} wajib diisi',
                ],
            ],
        ])){
            // Jika Data Valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $check = $this->ModelAuth->login($email, $password);
            if($check){
                // Jika Datanya Ada
                session()->set('log', true);
                session()->set('email', $check['email']);
                session()->set('username', $check['username']);
                session()->set('foto', $check['foto']);
                session()->set('level', $check['level']);

                return redirect()->to(base_url('dashboard'));
            }else{
                // Jika Datanya Tidak Ada
                session()->setFlashdata('pesan', 'Username atau Password tidak cocok!');
                return redirect()->to(base_url('login'));
            }
        }else{
            // Jika Data Tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('login'));
        }
    }

    public function logout(){
        session()->remove('log');
        session()->remove('email');
        session()->remove('username');
        session()->remove('foto');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Berhasil keluar!');
        return redirect()->to(base_url('login'));
    }


}
