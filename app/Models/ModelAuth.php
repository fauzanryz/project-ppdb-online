<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function saveRegister($data){
        $this->db->table('user')->insert($data);
    }
}
