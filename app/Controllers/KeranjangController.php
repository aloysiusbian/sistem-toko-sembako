<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class KeranjangController extends BaseController
{
    public function index(): string
    {
        $session = session();
        $items = $session->get('keranjang') ?? [];

        return view('keranjang', ['items' => $items]);
    }

    public function add()
    {
        $produkId = $this->request->getPost('produk_id');
        $jumlah = (int) $this->request->getPost('quantity') ?: 1;

        $produkModel = new ProdukModel();
        $produk = $produkModel->find($produkId);

        if (!$produk) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan');
        }

        $session = session();
        $keranjang = $session->get('keranjang') ?? [];

        // Cek apakah produk sudah ada di keranjang
        if (isset($keranjang[$produkId])) {
            $keranjang[$produkId]['jumlah'] += $jumlah;
        } else {
            $keranjang[$produkId] = [
                'id' => $produk['id'],
                'nama_produk' => $produk['nama_produk'],
                'harga' => $produk['harga'],
                'gambar' => base_url($produk['gambar']),
                'jumlah' => $jumlah
            ];
        }

        $session->set('keranjang', $keranjang);

        return redirect()->to('/keranjang');
    }

    public function remove($id)
    {
        $session = session();
        $keranjang = $session->get('keranjang') ?? [];

        unset($keranjang[$id]);

        $session->set('keranjang', $keranjang);
        return redirect()->to('/keranjang');
    }

    public function update($id)
    {
        $session = session();
        $keranjang = $session->get('keranjang') ?? [];
        $jumlah = (int) $this->request->getPost('quantity');

        if (isset($keranjang[$id]) && $jumlah > 0) {
            $keranjang[$id]['jumlah'] = $jumlah;
            $session->set('keranjang', $keranjang);
        }

        return redirect()->to('/keranjang');
    }
}

