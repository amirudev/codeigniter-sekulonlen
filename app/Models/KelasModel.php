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

    public function listing($idsiswa)
    {
        $this->select('*');
        $this->join('user', 'user.id = kelas.user_id');
        $this->join('siswakelas', 'siswakelas.kelas_id = kelas.id');
        $this->where("siswakelas.user_id = $idsiswa");
        $query = $this->get();
        return $query->getResultArray();
    }
}