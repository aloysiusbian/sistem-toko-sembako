<?php

namespace App\Controllers;

use App\Models\PembayaranModel;

class RiwayatController extends BaseController
{
    public function index(): string
    {
        $model = new PembayaranModel();
        $riwayat = $model->orderBy('created_at', 'DESC')->findAll();

        return view('riwayat', ['riwayat' => $riwayat]);
    }
}