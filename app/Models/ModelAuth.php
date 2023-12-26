<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'idUser';
    protected $allowedFields    = [
        'email',
        'username',
        'password',
        'foto',
        'level'
    ];
    public function saveRegister($data)
    {
        return $this->db->table('user')->insert($data);
    }
    public function login($identity, $password)
    {
        $user = $this->db->table('user')
            ->where('email', $identity)
            ->orWhere('username', $identity)
            ->get()
            ->getRowArray();
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }
}
