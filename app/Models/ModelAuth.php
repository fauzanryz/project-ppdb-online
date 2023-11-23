<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function saveRegister($data){
        $this->db->table('user')->insert($data);
    }

    public function login($email, $password){
        $user = $this->db->table('user')->where('email', $email)->get()->getRowArray();
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }


}
