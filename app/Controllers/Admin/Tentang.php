<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TentangModel;

class Tentang extends BaseController
{
    protected $tentang;

    public function __construct()
    {
        $this->tentang = new TentangModel();
    }
    public function index()
    {
        $item['title'] = "Tentang";
        return view('admin/tentang', $item);
    }

    public function read() 
    {
        $data = $this->tentang->findAll();
        return $this->respond($data);
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $item = [
            'sejarah'=>$param->sejarah,
            'visi'=>$param->visi,
            'misi'=>$param->misi
        ];
        $this->tentang->insert($item);
        $item['id'] = $this->tentang->getInsertID();
        return $this->respondCreated($item);
    }

    public function put() 
    {
        $param = $this->request->getJSON();
        $item = [
            'sejarah'=>$param->sejarah,
            'visi'=>$param->visi,
            'misi'=>$param->misi
        ];
        $this->tentang->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id) 
    {
        $this->tentang->delete($id);
        return $this->respondDeleted(true);
    }
}
