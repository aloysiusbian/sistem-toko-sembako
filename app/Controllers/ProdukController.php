<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class ProdukController extends BaseController
{
    public function index(): string
    {
        return view('produk');
    }
    public function detail($kode)
    {
        $model = new ProdukModel();
        $produk = $model->where('id', $kode)->first();

        if (!$produk) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Produk dengan kode $kode tidak ditemukan.");
        }

        return view('produk', ['produk' => $produk]);
    }
}
