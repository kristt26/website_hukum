<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Decode;
use App\Models\ArsipModel;

class Arsip extends BaseController
{
    protected $arsip;
    protected $code;

    public function __construct()
    {
        $this->arsip = new ArsipModel();
        $this->code =  new Decode();
    }

    public function index()
    {
        $item['title'] = "Arsip";
        return view('admin/arsip', $item);
    }

    public function read()
    {
        $data = $this->arsip->findAll();
        return $this->respond($data);
    }

    public function post()
    {
        $param = $this->request->getJSON();
        $item = [
            'nama'=>$param->nama,
            'file'=>$this->code->decodebase64($param->berkas->base64,'arsip')
        ];
        $this->arsip->insert($item);
        $item['id'] = $this->arsip->getInsertID();
        return $this->respondCreated($item);
    }

    public function put()
    {
        $param = $this->request->getJSON();
        $item = [
            'id' => $param->id,
            'nama'=>$param->nama,
        ];
        if(isset($param->berkas)){
            // unlink('assets/berkas/pengajar/'.$param->gambar);
            $item['file'] = $this->code->decodebase64($param->berkas->base64,'arsip');
        }
        $this->arsip->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id)
    {
        $this->arsip->delete($id);
        return $this->respondDeleted(true);
    }
}
