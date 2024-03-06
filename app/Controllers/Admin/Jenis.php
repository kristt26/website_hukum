<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JenisModel;

class Jenis extends BaseController
{
    protected $jenis;

    public function __construct()
    {
        $this->jenis = new JenisModel();
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $item = [
            'jenis'=>$param->jenis
        ];
        $this->jenis->insert($item);
        $item['id'] = $this->jenis->getInsertID();
        return $this->respondCreated($item);
    }
}
