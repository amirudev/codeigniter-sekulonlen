<?php
namespace App\Models;

use CodeIgniter\Model;

class SiswaTugasModel extends Model
{
    protected $table = 'siswatugas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'tugas_id', 'attachment', 'filename', 'content', 'created_at'];
    protected $returnType = 'App\Entities\Tugas';
    protected $useTimestamps = false;

    public function indextugas($idguru)
    {
        $this->select(['user.id', 'user.user_fullname', 'kelas.kelas_name', 'siswatugas.tugas_id', 'siswatugas.filename', 'siswatugas.created_at']);
        $this->join('tugas', 'tugas.id = siswatugas.tugas_id');
        $this->join('kelas', 'kelas.id = tugas.kelas_id');
        $this->where('kelas.kelas_userid', $idguru);
        $this->join('user', 'user.id = siswatugas.user_id');
        $query = $this->get();
        return $query->getResultArray();
    }
}