<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CplModel;
use App\Models\UnsurModel;

class Cpl extends BaseController
{
    protected $cpl;
    protected $unsur;

    public function __construct()
    {
        $this->cpl = new CplModel();
        $this->unsur = new UnsurModel();
    }
    public function index()
    {
        $item['title'] = "CPL";
        return view('admin/cpl', $item);
    }

    public function read() 
    {
        $data['cpl'] = $this->cpl->select('cpl.*, unsur.unsur')->join('unsur', 'unsur.id=cpl.unsur_id')->findAll();
        $data['unsur'] = $this->unsur->findAll();
        return $this->respond($data);
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $item = [
            'kode'=>$param->kode,
            'cpl'=>$param->cpl,
            'unsur_id'=>$param->unsur_id
        ];
        $this->cpl->insert($item);
        $item['id'] = $this->cpl->getInsertID();
        return $this->respondCreated($item);
    }

    public function put() 
    {
        $param = $this->request->getJSON();
        $item = [
            'id'=>$param->id,
            'kode'=>$param->kode,
            'cpl'=>$param->cpl,
            'unsur_id'=>$param->misi
        ];
        $this->cpl->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id) 
    {
        $this->cpl->delete($id);
        return $this->respondDeleted(true);
    }
}
