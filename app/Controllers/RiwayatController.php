<?php

namespace App\Controllers;

use App\Models\RiwayatModel;

class RiwayatController extends BaseController
{
    public function index()
    {
        // Ambil user ID dari session (pastikan login sudah jalan)
        $userId = session()->get('id');

        $model = new RiwayatModel();
        $data['riwayat'] = $model->getRiwayatByUser($userId);

        return view('riwayat/index', $data);
    }
}
