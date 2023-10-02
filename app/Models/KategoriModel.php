<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriaModel extends Model
{
    protected $table = 'tb_kategori';
    protected $primarykey = 'id';
    protected $allowedFields = ['kategori','kode_ddc'];
}