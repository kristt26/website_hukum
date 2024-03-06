<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Decode;
use App\Models\SliderModel;

class Slider extends BaseController
{
    protected $slider;
    protected $code;

    public function __construct()
    {
        $this->slider = new SliderModel();
        $this->code =  new Decode();
    }

    public function index()
    {
        $item['title'] = "Slider";
        return view('admin/slider', $item);
    }

    public function read()
    {
        $data = $this->slider->findAll();
        return $this->respond($data);
    }

    public function post()
    {
        $param = $this->request->getJSON();
        $item = [
            'text'=>$param->text,
            'desc'=>$param->desc,
            'file'=>$this->code->decodebase64($param->berkas->base64,'slider')
        ];
        $this->slider->insert($item);
        $item['id'] = $this->slider->getInsertID();
        return $this->respondCreated($item);
    }

    public function put()
    {
        $param = $this->request->getJSON();
        $item = [
            'id' => $param->id,
            'text'=>$param->text,
            'desc'=>$param->desc,
        ];
        if(isset($param->berkas)){
            // unlink('assets/berkas/pengajar/'.$param->gambar);
            $item['file'] = $this->code->decodebase64($param->berkas->base64,'slider');
        }
        $this->slider->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id)
    {
        $this->slider->delete($id);
        return $this->respondDeleted(true);
    }
}
