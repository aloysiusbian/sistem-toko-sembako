<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'username';
    protected $allowedFields = ['username', 'password', 'email', 'nama_lengkap'];

    public function register($akun)
    {
        $this->insert([
            'username' => $akun['username'],
            'password' => $akun['password'],
            'email' => $akun['email'],
            'nama_lengkap' => $akun['nama_lengkap'],
        ]);
    }
}
