<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'user_fullname', 'password', 'privilege'];
    protected $returnType = 'App\Entities\User';
    protected $useTimestamps = false;
}