<?php

namespace App\Controllers;

use App\Models\KegiatanModel;
use App\Models\PrestasiModel;

class Home extends BaseController
{
    protected $slide;
    protected $lulusan;
    protected $pegnajar;
    protected $berita;
    protected $arsip;
    protected $tentang;
    protected $matakuliah;
    protected $cpl;
    protected $unsur;
    protected $pres;
    protected $keg;
    public function __construct()
    {
        $this->slide = new \App\Models\SliderModel();
        $this->lulusan = new \App\Models\LulusanModel();
        $this->pegnajar = new \App\Models\DosenModel();
        $this->berita = new \App\Models\BeritaModel();
        $this->arsip = new \App\Models\ArsipModel();
        $this->tentang = new \App\Models\TentangModel();
        
        
    }
    public function index(): string
    {
        $data['slide'] = $this->slide->first();
        $data['lulusan'] = $this->lulusan->findAll();
        $data['pengajar'] = $this->pegnajar->findAll();
        $data['arsip'] = $this->arsip->findAll();
        $berita = $this->berita->findAll();
        foreach ($berita as $key => $value) {
            $cut_text = substr(strip_tags($value->isi) , 0, 150);
            if (strip_tags($value->isi)[150 - 1] != ' ') { // jika huruf ke 50 (50 - 1 karena index dimulai dari 0) buka  spasi
                $new_pos = strrpos($cut_text, ' '); // cari posisi spasi, pencarian dari huruf terakhir
                $cut_text = substr(strip_tags($value->isi), 0, $new_pos);
            }
            $value->text = str_replace("\n", '', $cut_text);
        }
        $data['berita'] = $berita;

        return view('home/home', $data);
    }

    public function berita($id = null): string
    {
        $data['slide'] = $this->slide->first();
        $data['berita'] = $this->berita->where('id', $id)->first();
        $data['arsip'] = $this->arsip->findAll();
        $data['cum'] = "Detail Berita";

        return view('home/berita', $data);
    }

    public function sejarah(): string
    {
        $data['slide'] = $this->slide->first();
        $data['tentang'] = $this->tentang->first();
        $data['arsip'] = $this->arsip->findAll();
        $data['cum'] = "Sejarah";

        return view('home/sejarah', $data);
    }

    public function visi_misi(): string
    {
        $data['slide'] = $this->slide->first();
        $data['tentang'] = $this->tentang->first();
        $data['arsip'] = $this->arsip->findAll();
        $data['cum'] = "Visi Misi";

        return view('home/visi_misi', $data);
    }

    public function cpl(): string
    {
        $this->cpl = new \App\Models\CplModel();
        $this->unsur = new \App\Models\UnsurModel();
        $data['slide'] = $this->slide->first();
        $data['arsip'] = $this->arsip->findAll();
        $data['cum'] = "CPL";
        $cpl = $this->cpl->asObject()->findAll();
        $unsur = $this->unsur->asObject()->findAll();
        foreach ($unsur as $key => $value) {
            $value->cpl = [];
            foreach ($cpl as $key => $value1) {
                if($value1->unsur_id==$value->id) $value->cpl[]=$value1;
            }
        }
        $data['cpl'] = $unsur;

        return view('home/cpl', $data);
    }
    public function matakuliah(): string
    {
        $this->matakuliah = new \App\Models\MatakuliahModel();
        $data['slide'] = $this->slide->first();
        $data['arsip'] = $this->arsip->findAll();
        $data['cum'] = "Struktur Kurikulum";
        $data['matakuliah'] = $this->matakuliah->asObject()->select('matakuliah.*, jenis.jenis, kurikulum.kurikulum')->join('jenis', 'jenis.id=matakuliah.jenis_id')->join('kurikulum', 'kurikulum.id=matakuliah.kurikulum_id')->findAll();

        return view('home/matakuliah', $data);
    }
    public function prestasi(): string
    {
        $this->pres = new PrestasiModel();
        $data['slide'] = $this->slide->first();
        $data['arsip'] = $this->arsip->findAll();
        $data['cum'] = "Prestasi Mahasiswa";
        $data['prestasi'] = $this->pres->asObject()->findAll();

        return view('home/prestasi', $data);
    }
    public function kegiatan(): string
    {
        $this->keg= new KegiatanModel();
        $data['slide'] = $this->slide->first();
        $data['arsip'] = $this->arsip->findAll();
        $data['cum'] = "Kegiatan Mahasiswa";
        $data['kegiatan'] = $this->keg->asObject()->findAll();

        return view('home/kegiatan', $data);
    }
}
