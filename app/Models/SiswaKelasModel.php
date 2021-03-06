<?php
namespace App\Models;

use CodeIgniter\Model;

class SiswaKelasModel extends Model
{
    protected $table = 'siswakelas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'kelas_id'];
    protected $returnType = 'App\Entities\SiswaKelas';
    protected $useTimestamps = false;
}