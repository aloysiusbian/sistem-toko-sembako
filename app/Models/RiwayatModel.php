<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
    protected $table = 'riwayat_pembelian';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id_keranjang', 'tanggal_pembelian'];

    public function getRiwayatByUser($userId)
    {
        return $this->select('produk.nama AS nama_produk, produk.gambar, keranjang.jumlah, keranjang.total_harga, riwayat_pembelian.tanggal_pembelian')
                    ->join('keranjang', 'keranjang.id = riwayat_pembelian.id_keranjang')
                    ->join('produk', 'produk.id = keranjang.id_produk')
                    ->where('keranjang.id_user', $userId)
                    ->orderBy('riwayat_pembelian.tanggal_pembelian', 'DESC')
                    ->findAll();
    }
}
