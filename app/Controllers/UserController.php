<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Config\View;

class UserController extends BaseController
{
    public function index()
    {
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
}
