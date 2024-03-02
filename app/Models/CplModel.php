<?php

namespace App\Models;

use CodeIgniter\Model;

class CplModel extends Model
{
    protected $table            = 'cpl';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['unsur', 'kode', 'cpl'];

    protected bool $allowEmptyInserts = false;
}
