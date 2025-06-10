<?php

namespace App\Controllers;

use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function index()
    {
        // Jika request POST (form dikirim)
        if ($this->request->getMethod() === 'post') {
            $post = $this->request->getPost(['username','email','password','nama_lengkap']);

            $model = model(UserModel::class);

            // Simpan ke database
            if (!$model->register($post)) {
                // Jika gagal, tampilkan error ke view
                return view('register', [
                    'errors' => $model->errors()
                ]);
            }

            // Redirect setelah sukses daftar (misal ke login)
            return redirect()->to('/login');
        }

        // Jika GET, tampilkan form register
        return view('register');
    }
    

    public function register()
    {
        helper('form');
        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('/register');
        }
        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'nim',
            'nama',
            "praktikum",
            "ipk"
        ]);
        // Mengakses Model untuk menyimpan data
        $model = model(UserModel::class);
        $model->register($post);
        return view('/login');
    }
}
