<?php

namespace App\Controllers;

use App\Models\PembayaranModel;

class RiwayatController extends BaseController
{
    public function index()
    {
        $model = new PembayaranModel();

        $data['riwayat'] = $model->orderBy('created_at', 'DESC')->findAll();

        return view('riwayat', $data);
    }
}