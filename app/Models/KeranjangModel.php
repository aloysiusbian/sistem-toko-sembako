<?php

namespace App\Models;

use CodeIgniter\Model;

class KeranjangModel extends Model
{
    protected $table = 'keranjang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'id_produk', 'jumlah', 'created_at', 'updated_at'];

    
}