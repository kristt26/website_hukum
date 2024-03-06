<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UnsurModel;

class Unsur extends BaseController
{
    protected $unsur;

    public function __construct()
    {
        $this->unsur = new UnsurModel();
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $item = [
            'unsur'=>$param->unsur
        ];
        $this->unsur->insert($item);
        $item['id'] = $this->unsur->getInsertID();
        return $this->respondCreated($item);
    }
}
