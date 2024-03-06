<?php

namespace App\Models;

use CodeIgniter\Model;

class TentangModel extends Model
{
    protected $table            = 'tentang';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['sejarah', 'visi', 'misi'];

    protected bool $allowEmptyInserts = false;
}
