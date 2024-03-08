<!DOCTYPE html>
<html lang="">

<head>
    <title>HUKUM - USN Papua</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="/home/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row0">
        <div id="topbar" class="hoc clear">
            <div class="fl_left">
                <!-- ################################################################################################ -->
                <ul class="nospace">
                    <li><i class="fas fa-phone rgtspace-5"></i> (0967)</li>
                    <li><i class="far fa-envelope rgtspace-5"></i> center@usn-papua.ac.id</li>
                </ul>
                <!-- ################################################################################################ -->
            </div>
            <div class="fl_right">
                <!-- ################################################################################################ -->
                <ul class="nospace">
                    <li><a href="auth" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
                </ul>
                <!-- ################################################################################################ -->
            </div>
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <div id="logo" class="fl_left">
                <!-- ################################################################################################ -->
                <h1><a href="../index.html">PRODI HUKUM</a></h1>
                <!-- ################################################################################################ -->
            </div>
            <nav id="mainav" class="fl_right">
                <!-- ################################################################################################ -->
                <ul class="clear">
                    <li class=""><a href="<?= base_url() ?>">Beranda</a></li>
                    <li class="<?= ($cum=='Sejarah' || $cum =='Visi Misi') ? 'active' : ''?>"><a class="drop" href="">Tentang Kami</a>
                        <ul>
                            <li class="<?= ($cum=='Sejarah') ? 'active' : ''?>"><a href="/sejarah">Sejarah</a></li>
                            <li class="<?= ($cum=='Visi Misi') ? 'active' : ''?>"><a href="/visi_misi">Visi dan Misi</a></li>
                        </ul>
                    </li>
                    <li class="<?= ($cum=='CPL' || $cum =='Struktur Kurikulum') ? 'active' : ''?>"><a class="drop" href="">Akademik</a>
                        <ul>
                            <li class="<?= ($cum=='CPL') ? 'active' : ''?>"><a href="/cpl_prodi">CPL Prodi</a></li>
                            <li class="<?= ($cum=='Struktur Kurikulum') ? 'active' : ''?>"><a href="/matakuliah">Struktur Kurikulum</a></li>
                        </ul>
                    </li>
                    <li class="<?= ($cum=='Prestasi Mahasiswa' || $cum =='Kegiatan Mahasiswa') ? 'active' : ''?>"><a class="drop" href="#">Kemahasiswaan</a>
                        <ul>
                            <li><a href="">Alumni</a></li>
                            <li class="<?= ($cum=='Prestasi Mahasiswa') ? 'active' : ''?>"><a href="/prestasi_mahasiswa">Prestasi Mahasiswa</a></li>
                            <li class="<?= ($cum=='Kegiatan Mahasiswa') ? 'active' : ''?>"><a href="/kegiatan_mahasiswa">Kegiatan Kemahasiswaan</a></li>
                        </ul>
                    </li>
                    <li><a class="drop" href="#">Arsip</a>
                        <ul>
                            <?php foreach ($arsip as $value) : ?>
                                <li><a href="assets/berkas/arsip/<?= $value['file'] ?>" target="_blank">Unduh <?= $value['nama'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
                <!-- ################################################################################################ -->
            </nav>
        </header>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper bgded overlay" style="background-image:url('/assets/berkas/slider/<?= $slide['file']?>');">
        <div id="breadcrumb" class="hoc clear">
            <!-- ################################################################################################ -->
            <ul>
                <li><a href="<?= base_url()?>">Home</a></li>
                <li><a href=""><?= $cum?></a></li>
            </ul>
        </div>
    </div>
    <div class="wrapper row3">
        <main class="hoc container clear">
            <div class="content">
                <?= $this->renderSection('content'); ?>
            </div>
            <div class="clear"></div>
        </main>
    </div>
    <div class="wrapper row4">
        <footer id="footer" class="hoc clear">
            <div class="one_half first">
                <h6 class="heading">Ilmu Hukum USN Papua</h6>
                <ul class="nospace linklist contact btmspace-30">
                    <li><i class="fas fa-map-marker-alt"></i>
                        <address>
                            Jln Ardipura II No. 22D, Polimak, Jayapura, Papua
                        </address>
                    </li>
                    <li><i class="fas fa-phone"></i> (0967)</li>
                    <li><i class="far fa-envelope"></i> center@usn-papua.ac.id</li>
                </ul>
                <ul class="faico clear">
                    <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a class="faicon-youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>

            <div class="one_half">
                <h6 class="heading">LAYANAN</h6>
                <ul class="nospace linklist">
                    <li><a href="https://simak.usn-papua.ac.id/" target="_blank">SIMAK</a></li>
                    <li><a href="https://usn-papua.ac.id/learning/" target="_blank">E-Learning</a></li>
                    <li><a href="#" target="_blank">Tracer Study</a></li>
                    <li><a href="#" target="_blank">TIKAM</a></li>
                </ul>
            </div>
            <!-- ################################################################################################ -->
        </footer>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <!-- ################################################################################################ -->
            <p class="fl_left">Copyright &copy; 2024 - <a href="https://usn-papua.ac.id/">Universita Sepuluh Nopember Papua</a></p>
            <p class="fl_right">OCS Jayapura</p>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="/home/layout/scripts/jquery.min.js"></script>
    <script src="/home/layout/scripts/jquery.backtotop.js"></script>
    <script src="/home/layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>