<?php

namespace App\Models;

use CodeIgniter\Model;

class LulusanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'profile_lulusan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['profile', 'desc', 'icon'];
    
}
