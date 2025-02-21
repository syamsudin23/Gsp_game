<?php

namespace App\Controllers;

use App\Models\UserModel;

class c_Lboard extends BaseController
{

    public function Leader_board()
    {
        return view('Leaderboard/v_Lboard'); // Menampilkan halaman leaderboard
    }

}