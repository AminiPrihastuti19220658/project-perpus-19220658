<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'tb_anggota';
    protected $primarykey = 'id';
    protected $allowedFields = ['nama_lengkap', 'alamat', 'kota', 'notelp','email'];
}