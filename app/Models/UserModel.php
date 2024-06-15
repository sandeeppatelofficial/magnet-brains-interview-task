<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    //User Model
    protected $table = 'users';
    protected $allowedFields = ['name','email', 'password'];
    protected $useTimestamps = true;

    public function getUser($email)
    {
        return $this->where('email', $email)->first();
    }
}
