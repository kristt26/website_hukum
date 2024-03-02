<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>USN Papua</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>/home/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/home/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>/home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/home/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>/home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/home/assets/css/style.css" rel="stylesheet">
    <style>
        #footer {
            position: fixed;
            height: 100px;
            bottom: 0;
            width: 100%;
        }
    </style>

    <!-- =======================================================
  * Template Name: Gp
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <a href="index.html" class="logo"><img src="<?= base_url() ?>assets/img/usn.png" alt="" class="img-fluid" width="200%"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?= base_url() ?>/home/assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url(); ?>">Beranda</a></li>
                    <li class="dropdown"><a href="#"><span>Akademi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <?php foreach ($prodi as $key => $value) : ?>
                                <li><a href="<?= $value->link == null ? '#' : $value->link ?>"><?= $value->prodi ?></a></li>
                            <?php endforeach; ?>
                            <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Kemahasiswaan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Tracer Study</a></li>
                            <li><a href="#">Sistem Evaluasi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Tentang USN</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Sambutan Rektor</a></li>
                            <li><a href="#">Sejarah</a></li>
                            <li><a href="#">Visi dan Misi</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="<?= base_url('contact') ?>">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

            <a href="https://docs.google.com/forms/d/e/1FAIpQLScPLFvQa4Sns2N1Rj2Ou5sFfAYJcPDq85YG_KnpUMlaRadfVA/viewform" target="_blank" class="get-started-btn scrollto">Pendaftaran Mahasiswa</a>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <div class="col-md-6">
                        <h2><?= $data->judul ?></h2>
                    </div>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li><?= $title ?></li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page" style="padding: 0 0 200px 0;">
            <div class="container">
                <?= $this->renderSection('content'); ?>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright" style="font-size: large;">
                Universitas Sepuluh Nopember Papua
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                USN Papua
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>/home/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url() ?>/home/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/home/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>/home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/home/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>/home/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <!-- <script src="<?= base_url() ?>/home/assets/js/main.js"></script> -->

</body>

</html>