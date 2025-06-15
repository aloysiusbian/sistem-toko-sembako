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
      
        if (!$this->request->is('post')) {
            return view('register');
        }
      
        $post = $this->request->getPost([
            'username',
            'password',
            "email",
            "nama_lengkap"
        ]);
       
        $model = model(UserModel::class);
        $model->register($post);
        return View('login');
    }
    public function verif()
    {
        $session = session();
        $model = new UserModel();

      
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

      
        $user = $model->where('username', $username)->first();

        if (!$user) {
            return redirect()->back()->withInput()->with('error', 'Username tidak ditemukan.');
        }

       
        if (!($password == $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Password salah.');
        }

       
        $session->set([
            'username' => $user['username'],
            'nama_lengkap' => $user['nama_lengkap'],
            'email' => $user['email'],
            'logged_in' => true
        ]);

        return redirect()->to('/beranda');
    }

   

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
