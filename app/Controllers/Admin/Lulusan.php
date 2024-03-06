<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LulusanModel;

class Lulusan extends BaseController
{
    protected $lulusan;

    public function __construct()
    {
        $this->lulusan = new LulusanModel();
    }
    public function index()
    {
        $item['title'] = "Profile Lulusan";
        return view('admin/lulusan', $item);
    }

    public function read() 
    {
        $data = $this->lulusan->findAll();
        return $this->respond($data);
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $item = [
            'profile'=>$param->profile,
            'desc'=>$param->desc,
            'icon'=>$param->icon,
        ];
        $this->lulusan->insert($item);
        $item['id'] = $this->lulusan->getInsertID();
        return $this->respondCreated($item);
    }

    public function put() 
    {
        $param = $this->request->getJSON();
        $item = [
            'id'=>$param->id,
            'profile'=>$param->profile,
            'desc'=>$param->desc,
            'icon'=>$param->icon,
        ];
        $this->lulusan->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id) 
    {
        $this->lulusan->delete($id);
        return $this->respondDeleted(true);
    }
}
