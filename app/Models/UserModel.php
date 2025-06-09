<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user'; 
    protected $primaryKey = 'email';  

    protected $allowedFields = ['email', 'password']; 

    public function simpan($data)
    {
        $this->save([
            'email' => $data['email'],
            'password' => $data['password']
        ]);
    }
}
