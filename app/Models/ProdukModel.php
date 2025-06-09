<?php
class ProdukModel {

    protected $table = 'produk';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'nama_produk', 'deskripsi', 'harga', 'stok'];

    public function get_produk($id) {
        
          
    }
}
