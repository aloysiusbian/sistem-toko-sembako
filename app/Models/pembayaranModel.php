<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'produk','alamat', 'metode', 'total', 'created_at'];
   protected $useTimestamps = false;
}

    