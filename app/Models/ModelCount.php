<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCount extends Model
{
    public function countPendaftar()
    {
        return $this->db->table('data_pendaftar')->countAll();
    }

    public function countDiterima()
    {
        return $this->db->table('data_pendaftar')->where('status_daftar', 'Diterima')->countAllResults();
    }
    
}
