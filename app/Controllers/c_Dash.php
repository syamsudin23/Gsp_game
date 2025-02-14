<?php

namespace App\Controllers;

use App\Models\UserModel;

class c_Dash extends BaseController
{
   
    public function Dashboard_awal()
    {
        return view('dashboard/Dash_awal'); // Menampilkan halaman dashboard
    }

    public function Dashboard_user()
    {
        return view('dashboard/Dash_user'); // Menampilkan halaman dashboard
    }

}