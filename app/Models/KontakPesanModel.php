<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakPesanModel extends Model
{
    protected $table = 'data_kontak_pesan';
    protected $primaryKey = 'no';
    protected $allowedFields = ['nama', 'email', 'nomor_telp', 'pesan', 'delete_data'];
}
