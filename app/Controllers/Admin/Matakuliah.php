<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JenisModel;
use App\Models\KurikulumModel;
use App\Models\MatakuliahModel;

class Matakuliah extends BaseController
{
    protected $jenis;
    protected $kurikulum;
    protected $matakuliah;

    public function __construct()
    {
        $this->jenis = new JenisModel();
        $this->kurikulum = new KurikulumModel();
        $this->matakuliah = new MatakuliahModel();
    }
    public function index()
    {
        $item['title'] = "Matakuliah";
        return view('admin/matakuliah', $item);
    }

    public function read() 
    {
        $data['jenis'] = $this->jenis->findAll();
        $data['kurikulum'] = $this->kurikulum->findAll();
        $data['matakuliah'] = $this->matakuliah->select('matakuliah.*, jenis.jenis, kurikulum.kurikulum')
        ->join('jenis', 'jenis.id=matakuliah.jenis_id')
        ->join('kurikulum', 'kurikulum.id=matakuliah.kurikulum_id')->findAll();
        return $this->respond($data);
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $item = [
            'kode'=>$param->kode,
            'matakuliah'=>$param->matakuliah,
            'sks'=>$param->sks,
            'jenis_id'=>$param->jenis_id,
            'kurikulum_id'=>$param->kurikulum_id,
        ];
        $this->matakuliah->insert($item);
        $item['id'] = $this->matakuliah->getInsertID();
        return $this->respondCreated($item);
    }

    public function put() 
    {
        $param = $this->request->getJSON();
        $item = [
            'id'=>$param->id,
            'kode'=>$param->kode,
            'matakuliah'=>$param->matakuliah,
            'sks'=>$param->sks,
            'jenis_id'=>$param->jenis_id,
            'kurikulum_id'=>$param->kurikulum_id,
        ];
        $this->matakuliah->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id) 
    {
        $this->matakuliah->delete($id);
        return $this->respondDeleted(true);
    }
}
