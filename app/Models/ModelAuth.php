<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function saveRegister($data){
        $this->db->table('user')->insert($data);
    }

    public function login($email, $password){
        return $this->db->table('user')->where([
            'email' => $email,
            'password' => $password,
        ])->get()->getRowArray();
    }

    
}
