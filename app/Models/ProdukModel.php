<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk'; // Nama tabel di database
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama_produk', 'harga', 'deskripsi', 'gambar'];

    public function getAllProduk()
    {
        $daftarProduk = $this->findAll();
        return $daftarProduk;
    }

}
