<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user_gsp';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'password','status','score'];
}
