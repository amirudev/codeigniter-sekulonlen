<?php
namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id';
    protected $allowedField = ['kelas_name', 'guru_id', 'kelas_icon', 'kelas_bgcolor'];
    protected $returnType = 'App\Entities\Kelas';
    protected $useTimestampes = false;

    public function listing()
    {
        $this->select('*');
        $this->join('guru', 'guru.id = kelas.guru_id');
        $query = $this->get();
        return $query->getResultArray();
    }
}