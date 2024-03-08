<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
    <title>Prodi Ilmu Hukum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="home/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
                    <li class="active"><a href="<?= base_url() ?>">Beranda</a></li>
                    <li><a class="drop" href="#">Tentang Kami</a>
                        <ul>
                            <li><a href="/sejarah">Sejarah</a></li>
                            <li><a href="/visi_misi">Visi dan Misi</a></li>
                        </ul>
                    </li>
                    <li><a class="drop" href="#">Akademik</a>
                        <ul>
                            <li><a href="/cpl_prodi">CPL Prodi</a></li>
                            <li><a href="/matakuliah">Struktur Kurikulum</a></li>
                        </ul>
                    </li>
                    <li><a class="drop" href="#">Kemahasiswaan</a>
                        <ul>
                            <li><a href="">Alumni</a></li>
                            <li><a href="/prestasi_mahasiswa">Prestasi Mahasiswa</a></li>
                            <li><a href="/kegiatan_mahasiswa">Kegiatan Kemahasiswaan</a></li>
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
    <div class="wrapper bgded overlay" style="background-image:url('/assets/berkas/slider/<?= $slide['file'] ?>');">
        <div id="pageintro" class="hoc clear">
            <!-- ################################################################################################ -->
            <article>
                <h3 class="heading"><?= $slide['text'] ?></h3>
                <p><?= $slide['desc'] ?></p>
            </article>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="center btmspace-80">
                <h6 class="heading underline font-x2">Profile Lulusan</h6>
            </div>
            <ul class="nospace group overview btmspace-80">
                <?php foreach ($lulusan as $item) : ?>
                    <li class="one_third">
                        <article>
                            <div class="clear"><a href="#"><?= $item->icon ?></a>
                                <h6 class="heading"><?= $item->profile ?></h6>
                            </div>
                            <p><?= $item->desc ?></p>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="clear"></div>
        </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row2">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="center btmspace-80">
                <h6 class="heading underline font-x2">Dosen Pengajar</h6>
            </div>
            <ul class="nospace group">
                <?php foreach ($pengajar as $item) : ?>
                    <li class="one_quarter first">
                        <figure class="fixwidth"><img src="assets/berkas/pengajar/<?= $item->file ?>" alt="">
                            <figcaption class="bold uppercase center"><?= $item->nama ?></figcaption>
                            <figcaption class="bold uppercase center">NIDN. <?= $item->nidn ?></figcaption>
                        </figure>
                    </li>
                <?php endforeach; ?>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- <div class="wrapper bgded overlay" style="background-image:url('home/images/demo/backgrounds/01.png');">
        <section class="hoc container clear">
            <div class="center btmspace-80">
                <h6 class="heading underline font-x2">Testimoni Mahasiswa</h6>
            </div>
            <ul id="testimonials" class="nospace group btmspace-80">
                <li class="one_half first">
                    <blockquote>Feugiat ligula augue tempor orci ullamcorper mattis erat pede at magna praesent non justo praesent vitae magna at metus pulvinar aliquam nulla dictum vestibulum lorem nam at elit vel erat eleifend.</blockquote>
                    <figure class="clear"><img class="circle" src="home/images/demo/60x60.png" alt="">
                        <figcaption>
                            <h6 class="heading">A. Doe</h6>
                            <em>CEO / Quis velit neque</em>
                        </figcaption>
                    </figure>
                </li>
                <li class="one_half">
                    <blockquote>Nec nisi id odio ultricies fermentum integer dolor nisi bibendum a faucibus nec ultricies at arcu aliquam nec eros quis est placerat vehicula in hac habitasse platea dictumst aliquam erat volutpat.</blockquote>
                    <figure class="clear"><img class="circle" src="home/images/demo/60x60.png" alt="">
                        <figcaption>
                            <h6 class="heading">B. Doe</h6>
                            <em>Director / Euismod tincidunt</em>
                        </figcaption>
                    </figure>
                </li>
            </ul>
            <footer class="center"><a class="btn" href="#">Phasellus pede mauris</a></footer>
        </section>
    </div> -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="center btmspace-80">
                <h6 class="heading underline font-x2">Berita Terkini</h6>
            </div>
            <ul id="latest" class="nospace group">
                <?php foreach ($berita as $key => $value) : ?>
                    <li class="one_third first">
                        <article>
                            <figure><img src="assets/berkas/berita/<?= $value->icon; ?>" alt=""></figure>
                            <div class="excerpt">
                                <h6 class="heading"><?= $value->judul; ?></h6>
                                <ul class="nospace meta">
                                    <li><i class="fas fa-user rgtspace-5"></i>Admin</li>
                                    <li><i class="far fa-clock rgtspace-5"></i>
                                        <time datetime="2045-04-06T08:15+00:00"><?= date('d F Y', strtotime($value->tanggal)); ?></time>
                                    </li>
                                </ul>
                                <p><?= $value->text ?></p>
                                <footer><a class="btn" href="detail_berita/<?= $value->id ?>">Read More</a></footer>
                            </div>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row4">
        <footer id="footer" class="hoc clear">
            <!-- ################################################################################################ -->
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
    <script src="home/layout/scripts/jquery.min.js"></script>
    <script src="home/layout/scripts/jquery.backtotop.js"></script>
    <script src="home/layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>