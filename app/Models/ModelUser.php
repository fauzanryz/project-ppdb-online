<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
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

    public function getUser($idUser = false)
    {
        if ($idUser == false) {
            return $this->where(['level' => 2])->findAll();
        }

        return $this->where(['idUser' => $idUser, 'level' => 2])->first();
    }

    public function checkEmailExists($email)
    {
        return $this->where('email', $email)->countAllResults() > 0;
    }

    public function checkUsernameExists($username)
    {
        return $this->where('username', $username)->countAllResults() > 0;
    }

}
