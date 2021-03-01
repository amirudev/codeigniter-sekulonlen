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
}