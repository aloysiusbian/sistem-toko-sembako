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
    
    public function mantap($id)
{
    // Asumsikan kamu pakai model bernama ProdukModel
    $produkModel = new \App\Models\ProdukModel();
    $produk = $produkModel->find($id);

    if (!$produk) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Produk tidak ditemukan.");
    }

    return view('produk', ['produk' => $produk]);
}

}

