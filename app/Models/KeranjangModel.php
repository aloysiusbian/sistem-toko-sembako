<?php

namespace App\Models;

use CodeIgniter\Model;

class KeranjangModel extends Model
{
    protected $table = 'keranjang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'id_produk', 'jumlah', 'created_at', 'updated_at'];

    public function getCartItems($username)
    {
        return $this->select('keranjang.*, produk.nama_produk, produk.harga, produk.gambar')
                    ->join('produk', 'produk.id = keranjang.id_produk')
                    ->where('id_user', $username)
                    ->findAll();
    }

    public function addToCart($data)
    {
        // Check if product already exists in cart
        $existing = $this->where([
            'id_user' => $data['id_user'],
            'id_produk' => $data['id_produk']
        ])->first();

        if ($existing) {
            // Update quantity if exists
            return $this->update($existing['id'], [
                'jumlah' => $existing['jumlah'] + $data['jumlah'],
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        } else {
            // Add new item
            return $this->insert([
                'id_user' => $data['id_user'],
                'id_produk' => $data['id_produk'],
                'jumlah' => $data['jumlah'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }

    public function removeFromCart($id)
    {
        return $this->delete($id);
    }

    public function updateQuantity($id, $quantity)
    {
        return $this->update($id, [
            'jumlah' => $quantity,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}