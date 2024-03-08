<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Decode;
use App\Models\KegiatanModel;

class Kegiatan extends BaseController
{
    protected $kegiatan;
    protected $code;

    public function __construct()
    {
        $this->kegiatan = new KegiatanModel();
        $this->code =  new Decode();
    }

    public function index()
    {
        $item['title'] = "Kegiatan";
        return view('admin/kegiatan', $item);
    }

    public function read()
    {
        $data = $this->kegiatan->findAll();
        return $this->respond($data);
    }

    public function post()
    {
        $param = $this->request->getJSON();
        $item = [
            'kegiatan'=>$param->kegiatan,
            'desc'=>$param->desc,
            'tanggal'=>$param->tanggal,
            'foto'=>$this->code->decodebase64($param->berkas->base64,'akademik')
        ];
        $this->kegiatan->insert($item);
        $item['id'] = $this->kegiatan->getInsertID();
        return $this->respondCreated($item);
    }

    public function put()
    {
        $param = $this->request->getJSON();
        $item = [
            'id' => $param->id,
            'kegiatan'=>$param->kegiatan,
            'tanggal'=>$param->tanggal,
            'desc'=>$param->desc,
        ];
        if(isset($param->berkas)){
            // unlink('assets/berkas/pengajar/'.$param->gambar);
            $item['foto'] = $this->code->decodebase64($param->berkas->base64,'akademik');
        }
        $this->kegiatan->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id)
    {
        $this->kegiatan->delete($id);
        return $this->respondDeleted(true);
    }
}
