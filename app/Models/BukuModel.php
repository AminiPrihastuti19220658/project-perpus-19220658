<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'tb_buku';
    protected $primarykey = 'id';
    protected $allowedFields = ['tb_kategori_id', 'tb_penerbit_id', 'judul', 'edisi', 'cetakan', 'sinopsis', 'halaman', 'penulis', 'tahun', 'cover_file'];
}