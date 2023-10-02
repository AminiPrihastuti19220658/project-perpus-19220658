<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table = 'tb_peminjaman';
    protected $primarykey = 'id';
    protected $allowedFields = ['tgl_peminjaman', 'tgl_pengembalian', 'tb_pengguna_id_peminjaman', 'tb_pengguna_id_pengembalian', 'tb_anggota_id ', 'tb_koleksibuku_id', 'denda'];
}