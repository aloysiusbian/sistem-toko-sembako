<?php

namespace App\Controllers;

use App\Models\KeranjangModel;
use App\Models\ProdukModel;

class KeranjangController extends BaseController
{
    protected $keranjangModel;
    protected $produkModel;

    public function __construct()
    {
        $this->keranjangModel = new KeranjangModel();
        $this->produkModel = new ProdukModel();
        helper('number');
    }

    public function index()
    {
        // Check if user is logged in
        $session = session();
        if (!$session->has('username')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu');
        }

        $username = $session->get('username');
        $data = [
            'items' => $this->keranjangModel->getCartItems($username),
            'title' => 'Keranjang Belanja'
        ];

        return view('keranjang', $data);
    }

    public function add()
    {
        $session = session();
        if (!$session->has('username')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu');
        }

        $produkId = $this->request->getPost('produk_id');
        $quantity = $this->request->getPost('quantity') ?? 1;

        // Verify product exists
        $produk = $this->produkModel->find($produkId);
        if (!$produk) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan');
        }

        $data = [
            'id_user' => $session->get('username'),
            'id_produk' => $produkId,
            'jumlah' => $quantity
        ];

        if ($this->keranjangModel->addToCart($data)) {
            return redirect()->to('/keranjang')->with('success', 'Produk berhasil ditambahkan ke keranjang');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan produk ke keranjang');
        }
    }

    public function update($id)
    {
        $session = session();
        if (!$session->has('username')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu');
        }

        $quantity = $this->request->getPost('quantity');
        if ($quantity < 1) {
            return $this->remove($id);
        }

        if ($this->keranjangModel->updateQuantity($id, $quantity)) {
            return redirect()->to('/keranjang')->with('success', 'Jumlah produk berhasil diupdate');
        } else {
            return redirect()->back()->with('error', 'Gagal mengupdate jumlah produk');
        }
    }

    public function remove($id)
    {
        $session = session();
        if (!$session->has('username')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu');
        }

        if ($this->keranjangModel->removeFromCart($id)) {
            return redirect()->to('/keranjang')->with('success', 'Produk berhasil dihapus dari keranjang');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus produk dari keranjang');
        }
    }
}