<?php

namespace App\Controllers;

use App\Models\PembayaranModel;

class RiwayatController extends BaseController
{
    public function index(): string
    {
        $model = new PembayaranModel();

<<<<<<< HEAD
        $data['riwayat'] = $model->orderBy('created_at', 'DESC')->findAll();

        return view('riwayat', $data);
=======
        return view('riwayat', ['riwayat' => $riwayat]);
>>>>>>> 62dca86749ef226867ac89f1da8c5b7ee30ef6ea
    }
}