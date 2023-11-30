<?php

namespace App\Models;

use CodeIgniter\Model;

class aromaniskuModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $useTimeStamps = true;
}