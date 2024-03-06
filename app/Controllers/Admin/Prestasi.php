<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Decode;
use App\Models\PrestasiModel;

class Prestasi extends BaseController
{
    protected $prestasi;
    protected $code;

    public function __construct()
    {
        $this->prestasi = new PrestasiModel();
        $this->code =  new Decode();
    }

    public function index()
    {
        $item['title'] = "Prestasi";
        return view('admin/prestasi', $item);
    }

    public function read()
    {
        $data = $this->prestasi->findAll();
        return $this->respond($data);
    }

    public function post()
    {
        $param = $this->request->getJSON();
        $item = [
            'prestasi'=>$param->prestasi,
            'desc'=>$param->desc,
            'foto'=>$this->code->decodebase64($param->berkas->base64,'akademik')
        ];
        $this->prestasi->insert($item);
        $item['id'] = $this->prestasi->getInsertID();
        return $this->respondCreated($item);
    }

    public function put()
    {
        $param = $this->request->getJSON();
        $item = [
            'id' => $param->id,
            'prestasi'=>$param->prestasi,
            'desc'=>$param->desc,
        ];
        if(isset($param->berkas)){
            // unlink('assets/berkas/pengajar/'.$param->gambar);
            $item['foto'] = $this->code->decodebase64($param->berkas->base64,'akademik');
        }
        $this->prestasi->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id)
    {
        $this->prestasi->delete($id);
        return $this->respondDeleted(true);
    }
}
