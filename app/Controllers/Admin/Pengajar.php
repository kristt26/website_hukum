<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Decode;
use App\Models\DosenModel;

class Pengajar extends BaseController
{
    protected $code;
    protected $pengajar;

    public function __construct()
    {
        $this->code = new Decode();
        $this->pengajar = new DosenModel();
    }
    public function index()
    {
        $item['title'] = "Pengajar";
        return view('admin/pengajar', $item);
    }

    public function read() 
    {
        $data = $this->pengajar->findAll();
        return $this->respond($data);
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $item = [
            'nama'=>$param->nama,
            'nidn'=>$param->nidn,
            'file'=>$this->code->decodebase64($param->berkas->base64,'pengajar')
        ];
        $this->pengajar->insert($item);
        $item['id'] = $this->pengajar->getInsertID();
        return $this->respondCreated($item);
    }

    public function put() 
    {
        $param = $this->request->getJSON();
        $item = [
            'id'=>$param->id,
            'nama'=>$param->nama,
            'nidn'=>$param->nidn,
        ];
        if(isset($param->berkas)){
            // unlink('assets/berkas/pengajar/'.$param->gambar);
            $item['file'] = $this->code->decodebase64($param->berkas->base64,'pengajar');
        }
        $this->pengajar->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id) 
    {
        $item = $this->pengajar->where('id', $id)->first();
        $this->pengajar->delete($id);
        unlink('assets/berkas/pengajar/'.$item->foto);
        return $this->respondDeleted(true);
    }
}
