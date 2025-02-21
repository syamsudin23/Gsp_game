<?php

namespace App\Controllers;

use App\Models\UserModel;

class c_Auth extends BaseController
{
    public function login()
    {
        return view('auth/v_login');
    }

    public function process_login()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Ambil user dari database berdasarkan username
        $user = $userModel->where('username', $username)->first();

        if ($user) {    
            // Cek apakah password cocok (TANPA HASH)
            if ($password === $user['password']) {
                session()->set([
                    'username' => $user['username'],
                    'logged_in' => true
                ]);
                return redirect()->to('/dashboard');
            } else {
                return redirect()->to('/login')->with('error', 'Password salah.');
            }
        } else {
            return redirect()->to('/login')->with('error', 'Username tidak ditemukan.');
        }
    }

    public function logout()
    {
        session()->destroy(); 
        return redirect()->to('/login');
    }

    public function register()
    {
        return view('auth/v_register');
    }
}
