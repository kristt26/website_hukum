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
                    <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
                    <li><i class="far fa-envelope rgtspace-5"></i> info@domain.com</li>
                </ul>
                <!-- ################################################################################################ -->
            </div>
            <div class="fl_right">
                <!-- ################################################################################################ -->
                <ul class="nospace">
                    <li><a href="index.html"><i class="fas fa-home"></i></a></li>
                    <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
                    <li><a href="#" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
                    <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
                    <li id="searchform">
                        <div>
                            <form action="#" method="post">
                                <fieldset>
                                    <legend>Quick Search:</legend>
                                    <input type="text" placeholder="Enter search term&hellip;">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </fieldset>
                            </form>
                        </div>
                    </li>
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
            <!-- <div id="logo" class="fl_left">
                <h1><a href="index.html">ILMU HUKUM</a></h1>
            </div> -->
            <nav id="mainav" class="fl_left" style="margin-left: 250px;">
                <!-- ################################################################################################ -->
                <ul class="clear">
                    <li class="active"><a href="index.html">Beranda</a></li>
                    <li><a class="drop" href="#">Tentang Kami</a>
                        <ul>
                            <li><a href="pages/gallery.html">Sejarah</a></li>
                            <li><a href="pages/full-width.html">Visi dan Misi</a></li>
                        </ul>
                    </li>
                    <li><a class="drop" href="#">Akademik</a>
                        <ul>
                            <li><a href="pages/gallery.html">CPL Prodi</a></li>
                            <li><a href="pages/full-width.html">Struktur Kurikulum</a></li>
                        </ul>
                    </li>
                    <li><a class="drop" href="#">Kemahasiswaan</a>
                        <ul>
                            <li><a href="pages/gallery.html">Alumni</a></li>
                            <li><a href="pages/full-width.html">Prestasi Mahasiswa</a></li>
                            <li><a href="pages/full-width.html">Kegiatan Kemahasiswaan</a></li>
                        </ul>
                    </li>
                    <li><a class="drop" href="#">Arsip</a>
                        <ul>
                            <li><a href="pages/gallery.html">Unduh Sertifikat Akreditasi</a></li>
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
    <div class="wrapper bgded overlay" style="background-image:url('home/images/demo/backgrounds/01.png');">
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
                        <figure class="fixwidth"><a class="imgover btmspace-30" href="#"><img src="assets/berkas/pengajar/<?= $item->file ?>" alt=""></a>
                            <figcaption class="bold uppercase center"><?= $item->nama?></figcaption>
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
    <div class="wrapper bgded overlay" style="background-image:url('home/images/demo/backgrounds/01.png');">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
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
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="center btmspace-80">
                <h6 class="heading underline font-x2">Hendrerit ligula eu diam</h6>
            </div>
            <ul id="latest" class="nospace group">
                <li class="one_third first">
                    <article>
                        <figure><a class="imgover" href="#"><img src="home/images/demo/348x261.png" alt=""></a></figure>
                        <div class="excerpt">
                            <h6 class="heading">In lobortis metus at quam donec velit maecenas lorem</h6>
                            <ul class="nospace meta">
                                <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Admin</a></li>
                                <li><i class="far fa-clock rgtspace-5"></i>
                                    <time datetime="2045-04-06T08:15+00:00">06 Apr 2045</time>
                                </li>
                            </ul>
                            <p>Ac nibh blandit eleifend nullam sed nisi in justo hendrerit egestas proin consectetuer turpis quis malesuada [<a href="#">&hellip;</a>]</p>
                            <footer><a class="btn" href="#">Read More</a></footer>
                        </div>
                    </article>
                </li>
                <li class="one_third">
                    <article>
                        <figure><a class="imgover" href="#"><img src="home/images/demo/348x261.png" alt=""></a></figure>
                        <div class="excerpt">
                            <h6 class="heading">Scelerisque justo lorem porta enim nec interdum quam</h6>
                            <ul class="nospace meta">
                                <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Admin</a></li>
                                <li><i class="far fa-clock rgtspace-5"></i>
                                    <time datetime="2045-04-05T08:15+00:00">05 Apr 2045</time>
                                </li>
                            </ul>
                            <p>Felis et libero aliquam ultrices aliquam quis purus feugiat tortor sodales vestibulum nunc sollicitudin tellus [<a href="#">&hellip;</a>]</p>
                            <footer><a class="btn" href="#">Read More</a></footer>
                        </div>
                    </article>
                </li>
                <li class="one_third">
                    <article>
                        <figure><a class="imgover" href="#"><img src="home/images/demo/348x261.png" alt=""></a></figure>
                        <div class="excerpt">
                            <h6 class="heading">Ultrices iaculis condimentum felis eros rutrum magna</h6>
                            <ul class="nospace meta">
                                <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Admin</a></li>
                                <li><i class="far fa-clock rgtspace-5"></i>
                                    <time datetime="2045-04-04T08:15+00:00">04 Apr 2045</time>
                                </li>
                            </ul>
                            <p>A blandit augue lorem ac est pellentesque et risus sed quis magna vestibulum erat nisl luctus iaculis consequat [<a href="#">&hellip;</a>]</p>
                            <footer><a class="btn" href="#">Read More</a></footer>
                        </div>
                    </article>
                </li>
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
            <div class="one_quarter first">
                <h6 class="heading">Id ornare et lorem sed</h6>
                <ul class="nospace linklist contact btmspace-30">
                    <li><i class="fas fa-map-marker-alt"></i>
                        <address>
                            Street Name &amp; Number, Town, Postcode/Zip
                        </address>
                    </li>
                    <li><i class="fas fa-phone"></i> +00 (123) 456 7890</li>
                    <li><i class="far fa-envelope"></i> info@domain.com</li>
                </ul>
                <ul class="faico clear">
                    <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
                </ul>
            </div>
            <div class="one_quarter">
                <h6 class="heading">Lacinia nunc et porta</h6>
                <ul class="nospace linklist">
                    <li>
                        <article>
                            <p class="nospace btmspace-10"><a href="#">Porta tellus massa consectetuer sem eget pharetra ligula purus sit amet dui.</a></p>
                            <time class="block font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
                        </article>
                    </li>
                    <li>
                        <article>
                            <p class="nospace btmspace-10"><a href="#">Commodo ornare maximus donec consectetuer adipiscing elit pellentesque habitant.</a></p>
                            <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
                        </article>
                    </li>
                </ul>
            </div>
            <div class="one_quarter">
                <h6 class="heading">Non lobortis felis lacus</h6>
                <ul class="nospace linklist">
                    <li><a href="#">Morbi tristique senectus</a></li>
                    <li><a href="#">Habitasse platea dictumst</a></li>
                    <li><a href="#">Egestas in hac habitasse</a></li>
                    <li><a href="#">Tellus ac convallis pellentesque</a></li>
                    <li><a href="#">Lacus tortor varius erat</a></li>
                </ul>
            </div>
            <div class="one_quarter">
                <h6 class="heading">Platea dictumst fusce</h6>
                <ul class="nospace clear latestimg">
                    <li><a class="imgover" href="#"><img src="home/images/demo/100x100.png" alt=""></a></li>
                    <li><a class="imgover" href="#"><img src="home/images/demo/100x100.png" alt=""></a></li>
                    <li><a class="imgover" href="#"><img src="home/images/demo/100x100.png" alt=""></a></li>
                    <li><a class="imgover" href="#"><img src="home/images/demo/100x100.png" alt=""></a></li>
                    <li><a class="imgover" href="#"><img src="home/images/demo/100x100.png" alt=""></a></li>
                    <li><a class="imgover" href="#"><img src="home/images/demo/100x100.png" alt=""></a></li>
                    <li><a class="imgover" href="#"><img src="home/images/demo/100x100.png" alt=""></a></li>
                    <li><a class="imgover" href="#"><img src="home/images/demo/100x100.png" alt=""></a></li>
                    <li><a class="imgover" href="#"><img src="home/images/demo/100x100.png" alt=""></a></li>
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
            <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
            <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
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