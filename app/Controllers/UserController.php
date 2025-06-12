<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Config\View;

class UserController extends BaseController
{
    public function login()
    {
        return view('login');
    }


    public function register()
    {
        helper('form');
        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('register');
        }
        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'username',
            'password',
            "email",
            "nama_lengkap"
        ]);
        // Mengakses Model untuk menyimpan data
        $model = model(UserModel::class);
        $model->register($post);
        return View('login');
    }
    public function auth()
    {
        $session = session();
        $model = new UserModel();

        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required|min_length[3]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan username
        $user = $model->where('username', $username)->first();

        if (!$user) {
            return redirect()->back()->withInput()->with('error', 'Username tidak ditemukan.');
        }

        // Verifikasi password (disarankan menggunakan password_hash())
        if (!($password == $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Password salah.');
        }

        // Set session data
        $session->set([
            'username' => $user['username'],
            'nama_lengkap' => $user['nama_lengkap'],
            'email' => $user['email'],
            'logged_in' => true
        ]);

        return redirect()->to('/beranda');
    }

    public function preview()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        return view('preview_user', [
            'username' => $username,
            // Jangan tampilkan password di preview
        ]);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
