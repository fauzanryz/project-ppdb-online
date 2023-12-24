<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProfil extends Model
{
    protected $table = 'profil';

    public function getData()
    {
        return $this->findAll();
    }
    public function getDataprofil()
    {
        $builder = $this->db->table($this->table);
        return $builder->get()->getRowArray();
    }
    public function getDataWhere($id_profil)
    {
        return $this->getWhere(['idProfil' => $id_profil]);
    }
    public function updateData($data, $where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->update($data);
    }
}
