<?php
namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $allowedFields = ['berita_judul', 'berita_content', 'created_at'];
    protected $returnType = 'App\Entities\Berita';
    protected $useTimestamps = false;

    public function frontlist(){
        $this->select('*');
        $this->orderBy('id', 'DESC');
        $this->limit('2');
        $query = $this->get();
        return $query->getResultArray();
    }
}