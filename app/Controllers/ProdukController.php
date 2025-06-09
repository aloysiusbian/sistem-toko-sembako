<?php

namespace App\Controllers;
class ProdukController extends BaseController
{
    public function index(): string
    {
        return view('produk');
    }
    public function detail($id)
    {
        
    }
}
