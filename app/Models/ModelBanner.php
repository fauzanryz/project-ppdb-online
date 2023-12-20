<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBanner extends Model
{
    protected $table = 'banner';

    public function getData()
    {
        return $this->findAll();
    }
    public function AddData($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function getDataWhere($id)
    {
        return $this->getWhere(['idBanner' => $id]);
    }
    public function updateData($data, $where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->update($data);
    }
    public function deleteData($where)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete($where);
    }
}
