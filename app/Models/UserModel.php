<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{protected $table = 'user';
protected $primaryKey = 'email'; // Jika tidak ada kolom ID
protected $allowedFields = ['email', 'password', 'username', 'nama_lengkap']; // Pastikan ada 'nama_lengkap'
protected $useAutoIncrement = false; // Nonaktifkan jika tidak ada kolom ID

// Hashing password sebelum insert
protected $beforeInsert = ['hashPassword'];
protected function hashPassword(array $data) {
    if (isset($data['data']['password'])) {
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
    }
    return $data;
}
}
