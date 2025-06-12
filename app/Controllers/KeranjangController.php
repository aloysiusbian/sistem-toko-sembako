<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class KeranjangController extends BaseController
{

    public function index(): string
    {
        return view('keranjang');
    }
}
