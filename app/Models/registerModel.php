<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table = 'register'; 
    protected $primaryKey = 'id';  

    protected $allowedFields = ['id', 'password']; 

    public function simpan($data)
    {
        $this->save([
            'id' => $data['id'],
            'password' => $data['password']
        ]);
    }
}
