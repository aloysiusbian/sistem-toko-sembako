<?php

namespace App\Controllers;

use App\Models\PembayaranModel;

class PembayaranController extends BaseController
{
    public function index()
    {
        $session = session();
        $items = $session->get('keranjang') ?? [];

        if (empty($items)) {
            return redirect()->to('/keranjang')->with('error', 'Keranjang Anda kosong.');
        }

        $totalHarga = array_reduce($items, function ($carry, $item) {
            return $carry + ($item['harga'] * $item['jumlah']);
        }, 0);

        return view('pembayaran', [
            'items' => $items,
            'totalHarga' => $totalHarga
        ]);
    }

    public function proses()
    {
        $session = session();
        $items = $session->get('keranjang') ?? [];

        if (empty($items)) {
            return redirect()->to('/keranjang')->with('error', 'Keranjang Anda kosong.');
        }

        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $metode = $this->request->getPost('metode');

        if (!$nama || !$alamat || !$metode) {
            return redirect()->back()->with('error', 'Harap isi semua data pembayaran.');
        }

        // Hitung total dan buat ringkasan produk
        $totalHarga = 0;
        $produkList = [];

        foreach ($items as $item) {
            $totalHarga += $item['harga'] * $item['jumlah'];
            $produkList[] = $item['nama_produk'] . ' x' . $item['jumlah'];
        }

        $produkString = implode(', ', $produkList);

        // Simpan ke database
        $pembayaranModel = new PembayaranModel();
        $pembayaranModel->insert([
            'nama'       => $nama,
            'alamat'     => $alamat,
            'metode'     => $metode,
            'total'      => $totalHarga,
            'produk'     => $produkString,
            'created_at' => date('Y-m-d H:i:s') // pastikan kolom created_at bertipe DATETIME
        ]);

        // Kosongkan keranjang
        $session->remove('keranjang');

        return view('pembayaran_sukses', [
            'nama'  => $nama,
            'total' => $totalHarga
        ]);
    }
}
