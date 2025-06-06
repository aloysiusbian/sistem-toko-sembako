<?php
class Produk_model {
    public function get_produk($id) {
        return $this->db->get_where('produk', ['id' => $id])->row();
    }
}
