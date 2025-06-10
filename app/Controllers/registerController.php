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
            if (!$model->insert($post)) {
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
}
