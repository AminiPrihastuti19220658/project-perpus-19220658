<?php

namespace App\Models;

use CodeIgniter\Model;

class PenerbitModel extends Model
{
    protected $table = 'tb_penerbit';
    protected $primarykey = 'id';
    protected $allowedFields = ['penerbit', 'kota'];
}