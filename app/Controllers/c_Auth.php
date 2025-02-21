<?php

namespace App\Controllers;

use App\Models\UserModel;

class c_Auth extends BaseController
{
    public function login()
    {
        return view('auth/v_login');
    }

    // Fungsi Process login 

    public function process_login()
    {
        if ($this->request->isAJAX()) {
            $userModel = new UserModel();
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Cek username di database
            $user = $userModel->where('username', $username)->first();

            if ($user) {
                // Cek apakah password cocok (tanpa hash)
                if ($password === $user['password']) {
                    session()->set([
                        'username' => $user['username'],
                        'logged_in' => true
                    ]);
                    return $this->response->setJSON(['status' => 'success', 'message' => 'Login berhasil!']);
                } else {
                    return $this->response->setJSON(['status' => 'error', 'message' => 'Password salah.']);
                }
            } else {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Maaf, username tidak ditemukan.']);
            }
        }

        // Jika bukan request AJAX, tampilkan error
        return $this->response->setStatusCode(400)->setJSON(['status' => 'error', 'message' => 'Permintaan tidak valid']);
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


    public function process_register()
    {
        if ($this->request->isAJAX()) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Validasi input
            if (empty($username) || empty($password)) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Semua kolom harus diisi.']);
            }

            $userModel = new UserModel();

            // Cek apakah username sudah ada
            $existingUser = $userModel->where('username', $username)->first();
            if ($existingUser) {
                return $this->response->setJSON(['status' => 'info', 'message' => 'Mohon gunakan username lain']);
            }

            // Simpan ke database
            $data = [
                'username' => $username,
                'password' => $password,  // Simpan tanpa hash
                'status_user' => 'user',  // Default "user"
                'score' => 0              // Default 0
            ];

            $userModel->insert($data);

            return $this->response->setJSON(['status' => 'success', 'message' => 'Registrasi berhasil! Silakan login.']);
        }
    }

    
    


}
