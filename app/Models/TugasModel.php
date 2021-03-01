<?php
namespace App\Models;

use CodeIgniter\Model;

class TugasModel extends Model
{
    protected $table = 'tugas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kelas_id', 'tugas_name', 'content', 'time_limit', 'created_at'];
    protected $returnType = 'App\Entities\Tugas';
    protected $useTimestamps = false;

    public function listing($idsiswa)
    {
        $currentdatetime = date('Y-m-d H:i:s', time());
        $this->select(['tugas.*', 'kelas.kelas_bgcolor', 'kelas.kelas_name']);
        $this->join('kelas', 'kelas.id = tugas.kelas_id');
        $this->join('siswakelas', 'siswakelas.kelas_id = kelas.id');
        $this->where("siswakelas.user_id = $idsiswa");
        $this->where("tugas.time_limit > '$currentdatetime'");
        $this->orderBy('time_limit', 'ASC');
        $query = $this->get();
        return $query->getResultArray();
    }

    public function listLate($idsiswa)
    {
        $currentdatetime = date('Y-m-d H:i:s', time());
        $this->select(['tugas.*', 'kelas.kelas_bgcolor', 'kelas.kelas_name']);
        $this->join('kelas', 'kelas.id = tugas.kelas_id');
        $this->join('siswakelas', 'siswakelas.kelas_id = kelas.id');
        $this->where("siswakelas.user_id = $idsiswa");
        $this->join('siswatugas', 'siswatugas.user_id = siswakelas.user_id');
        $this->where('siswatugas.tugas_id <> tugas.id');
        $this->where("tugas.time_limit < '$currentdatetime'");
        $this->orderBy('time_limit', 'DESC');
        $query = $this->get();
        return $query->getResultArray();
    }

    public function listCompleted($idsiswa)
    {
        $this->select(['tugas.*', 'kelas.kelas_bgcolor', 'kelas.kelas_name', 'siswatugas.created_at']);
        $this->join('kelas', 'kelas.id = tugas.kelas_id');
        $this->join('siswakelas', 'siswakelas.kelas_id = kelas.id');
        $this->where("siswakelas.user_id = $idsiswa");
        $this->join('siswatugas', 'siswatugas.user_id = siswakelas.user_id');
        $this->where('siswatugas.tugas_id = tugas.id');
        $this->orderBy('time_limit', 'ASC');
        $query = $this->get();
        return $query->getResultArray();
    }
}