<?php

namespace App\Models;

use CodeIgniter\Model;

class UnsurModel extends Model
{
    protected $table            = 'unsur';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['unsur'];

    protected bool $allowEmptyInserts = false;
}
