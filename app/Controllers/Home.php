<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $slide;
    protected $lulusan;
    protected $pegnajar;
    public function __construct() {
        $this->slide = new \App\Models\SliderModel();
        $this->lulusan = new \App\Models\LulusanModel();
        $this->pegnajar = new \App\Models\DosenModel();
    }
    public function index(): string
    {
        $data['slide'] = $this->slide->first();
        $data['lulusan'] = $this->lulusan->findAll();
        $data['pengajar'] = $this->pegnajar->findAll();
        return view('home/layout', $data);
    }
}
