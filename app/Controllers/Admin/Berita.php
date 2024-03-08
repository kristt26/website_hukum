<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Decode;
use App\Models\BeritaModel;

class Berita extends BaseController
{
    protected $code;
    protected $berita;

    public function __construct()
    {
        $this->code = new Decode();
        $this->berita = new BeritaModel();
    }
    public function index()
    {
        $item['title'] = "Berita";
        return view('admin/berita', $item);
    }

    public function read()
    {
        $data = $this->berita->findAll();
        foreach ($data as $key => $value) {
            $value->publish = $value->publish == '1' ? true : false;
        }
        return $this->respond($data);
    }

    public function post()
    {
        $param = $this->request->getJSON();
        $item = [
            'judul' => $param->judul,
            'gambar' => $this->code->decodebase64($param->berkas->base64, 'berita'),
            'icon' => $this->code->decodebase64($param->berkas1->base64, 'berita'),
            'isi' => $param->isi,
            'tanggal' => $param->tanggal,
            'publish' => false,
        ];
        $this->berita->insert($item);
        $item['id'] = $this->berita->getInsertID();
        return $this->respondCreated($item);
    }

    public function put()
    {
        $param = $this->request->getJSON();
        $item = [
            'id' => $param->id,
            'judul' => $param->judul,
            'gambar' => $param->gambar,
            'icon' => $param->icon,
            'isi' => $param->isi,
            'tanggal' => $param->tanggal,
            'publish' => $param->publish,
        ];
        if (isset($param->berkas)) {
            if (file_exists('assets/berkas/berita/' . $param->gambar)) {
                unlink('assets/berkas/berita/' . $param->gambar);
            }
            $item['gambar'] = $this->code->decodebase64($param->berkas->base64, 'berita');
        }
        if (isset($param->berkas1)) {
            if (file_exists('assets/berkas/berita/' . $param->icon)) {
                unlink('assets/berkas/berita/' . $param->icon);
            }
            $item['icon'] = $this->code->decodebase64($param->berkas1->base64, 'berita');
        }
        $this->berita->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id)
    {
        $item = $this->berita->where('id', $id)->first();
        $this->berita->delete($id);
        unlink('assets/berkas/berita/' . $item->gambar);
        return $this->respondDeleted(true);
    }
}
