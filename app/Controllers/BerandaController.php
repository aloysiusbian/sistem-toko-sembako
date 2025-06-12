<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class BerandaController extends BaseController
{
    public function index(): string
    {
        $produkModel = model(ProdukModel::class);
        $data = [
            "daftarProduk" => $produkModel->getAllProduk(),
        ];
        return view('beranda', $data);
    }


}
