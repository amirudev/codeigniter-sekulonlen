<?php
namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id';
    protected $allowedField = ['kelas_name', 'user_id', 'kelas_icon', 'kelas_bgcolor'];
    protected $returnType = 'App\Entities\Kelas';
    protected $useTimestamps = false;

    public function listing()
    {
        $this->select('*');
        $this->join('user', 'user.id = kelas.user_id');
        $query = $this->get();
        return $query->getResultArray();
    }
}