<?php

namespace App\Controllers;

use App\Models\UserModel;

class RegisterController extends BaseController
{
public function index() {
    $model = new UserModel();

    if ($this->request->getMethod() === 'post') {
        $rules = [
            'nama_lengkap' => 'required',  // Pastikan nama field sama
            'email' => 'required|valid_email|is_unique[user.email]',
            'username' => 'required',
            'password' => 'required|min_length[6]',
            'confirm_password' => 'required|matches[password]'
        ];

        $data = [
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'), // Sesuai dengan name di form
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        if ($model->insert($data)) {
            return redirect()->to('/login')->with('success', 'Registrasi berhasil!');
        } else {
            return redirect()->back()->withInput()->with('errors', $model->errors());
        }
    }

    return view('register');
}
}