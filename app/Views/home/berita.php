<?= $this->extend('home/layout') ?>
<?= $this->section('content') ?>
<h1><?= $berita->judul?></h1>
<img src="/assets/berkas/berita/<?= $berita->gambar?>" alt="">
<?= $berita->isi?>
<?= $this->endSection() ?>