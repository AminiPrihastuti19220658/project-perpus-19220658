<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'tb_pengguna';
    protected $primarykey = 'id';
    protected $allowedFields = ['email', 'nama_lengkap', 'kata_sandi'];
}