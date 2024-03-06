<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KurikulumModel;

class Kurikulum extends BaseController
{
    protected $kurikulum;

    public function __construct()
    {
        $this->kurikulum = new KurikulumModel();
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $item = [
            'kurikulum'=>$param->kurikulum,
            'status'=>"1"
        ];
        $this->kurikulum->insert($item);
        $item['id'] = $this->kurikulum->getInsertID();
        return $this->respondCreated($item);
    }
}
