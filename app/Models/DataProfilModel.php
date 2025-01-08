<?php

namespace App\Models;

use CodeIgniter\Model;

class DataProfilModel extends Model
{
    protected $table = 'data_profil'; // Nama tabel di database
    protected $allowedFields = ['nama', 'data', 'delete_data']; // Field yang bisa diakses
}
