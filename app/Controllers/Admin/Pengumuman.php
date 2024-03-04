<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PengumumanModel;

class Pengumuman extends BaseController
{
    protected $pengumuman;

    public function __construct()
    {
        $this->pengumuman = new PengumumanModel();
    }
    public function index()
    {
        $item['title'] = "Pengumuman";
        return view('admin/pengumuman', $item);
    }

    public function read() 
    {
        $data = $this->pengumuman->findAll();
        return $this->respond($data);
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $item = [
            'judul'=>$param->judul,
            'isi'=>$param->isi,
            'tanggal_mulai'=>$param->tanggal_mulai,
            'tanggal_selesai'=>$param->tanggal_selesai,
        ];
        $this->pengumuman->insert($item);
        $item['id'] = $this->pengumuman->getInsertID();
        return $this->respondCreated($item);
    }

    public function put() 
    {
        $param = $this->request->getJSON();
        $item = [
            'id'=>$param->id,
            'judul'=>$param->judul,
            'isi'=>$param->isi,
            'tanggal'=>$param->tanggal,
            'tampil'=>$param->tampil,
        ];
        $this->pengumuman->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id) 
    {
        $this->pengumuman->delete($id);
        return $this->respondDeleted(true);
    }
}
