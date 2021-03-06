<?php
namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kelas_name', 'kelas_userid', 'kelas_icon', 'kelas_bgcolor'];
    protected $returnType = 'App\Entities\Kelas';
    protected $useTimestamps = false;

    public function index($userid)
    {
        $this->select('*');
        $this->join('user', 'user.id = kelas.kelas_userid');
        $this->where("kelas.kelas_userid = $userid");
        $query = $this->get();
        return $query->getResultArray();
    }

    public function myclass($idsiswa)
    {
        $this->select('*');
        $this->join('user', 'user.id = kelas.kelas_userid');
        $this->groupBy('kelas.id');
        $this->join('siswakelas', 'siswakelas.kelas_id = kelas.id');
        $this->where("siswakelas.user_id = $idsiswa");
        $query = $this->get();
        return $query->getResultArray();
    }
}