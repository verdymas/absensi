<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">

    <link href="/landing/assets/images/logo.png" rel="icon">
    <title>SI Absensi Mahasiswa MI</title>

    <!-- Bootstrap core CSS -->
    <link href="/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/landing/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/landing/assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="/landing/assets/css/owl.css">
    <link rel="stylesheet" href="/landing/assets/css/lightbox.css">
    <!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
</head>

<body>
    @if ($msg = session()->get('error'))
        <script>
            alert("{{ $msg }}")
        </script>
    @endif

    <!--header-->
    <header class="main-header clearfix" role="header">
        <div class="logo">
            <a href="#"><em>Manajemen </em>Informatika</a>
        </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li><a href="#section1">Home</a></li>
                <!-- <li class="has-submenu"><a href="#section2">About Us</a>
          <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
            <li><a href="#section3">How it works?</a></li>
          </ul>
        </li> -->
                <li><a href="#section3">LOGIN</a></li>
            </ul>
        </nav>
    </header>

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="/landing/assets/images/course-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>SELAMAT DATANG DI SISTEM INFORMASI ABSENSI MAHASISWA</h6>
                <h2><em>MANAJEMEN </em>INFORMATIKA</h2>
                <h6>PSDKU POLITEKNIK NEGERI MALANG DI KOTA KEDIRI</h6>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->


    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="features-post">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-home"></i>About</h4>
                            </div>
                            <div class="content-hide">
                                <p>Program Studi Manajemen Informatika, Konsentrasi Sistem Informasi dirancang secara
                                    khusus guna menghasilkan tenaga ahli madya bidang sistem informasi,</p>
                                <div class="scroll-to-section"><a href="#section2">Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="features-post second-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-graduation-cap"></i>Login</h4>
                            </div>
                            <div class="content-hide">
                                <p>Halaman Login untuk Admin dan Mahasiswa Manajemen Infromatika</p>
                                <div class="scroll-to-section"><a href="#section3">Login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="features-post third-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-book"></i>Job Opportunities</h4>
                            </div>
                            <div class="content-hide">
                                <p>Lulusan Program Studi Manajemen Informatika, telah berhasil terserap di dunia usaha
                                    dan industri, diantaranya perusahaan IT, BUMN, perusahaan pertambangan, perusahaan
                                    manufaktur, perbankan, Pegawai Negeri Sipil, Militer, dan wirausaha.</p>
                                <div class="scroll-to-section"><a href="#section4">Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section why-us" data-section="section2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>MANAJEMEN INFORMATIKA PSDKU POLITEKNIK NEGERI MALANG DI KOTA KEDIRI</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id='tabs'>
                        <ul>
                            <li><a href='#tabs-1'>Manajemen Infromatika</a></li>
                            <li><a href='#tabs-2'>Kompetensi Lulusan</a></li>
                            <li><a href='#tabs-3'>Fasilitas</a></li>
                        </ul>
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="/landing/assets/images/choose-us-image-01.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Manajemen Informatika</h4>
                                        <p>Program Studi Manajemen Informatika, Konsentrasi Sistem Informasi dirancang
                                            secara khusus guna menghasilkan tenaga ahli madya bidang sistem informasi,
                                            yang memiliki kompetensi bidang manajerial, desain, dan pembuatan basis
                                            data, proses bisnis, dan prosedur bisnis dalam bentuk perangkat lunak, yang
                                            berkarakter technopreneur, sadar mutu dengan keunggulan kompetitif yang
                                            beretika profesi..</p>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="/landing/assets/images/choose-us-image-02.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Kompetensi Lulusan</h4>
                                        <p>Konsentrasi Sistem Informasi meliputi Perancang, pembuat, dan technopreneur
                                            bidang perangkat lunak. Teknisi bidang perangkat lunak.</p>
                                        <p>Konsentrasi Teknik Komputer dan Jaringan meliputi Perancang, pembuat, dan
                                            technopreneur bidang sistem jaringan dan perangkat pendukungnya.Teknisi
                                            bidang sistem jaringan dan perangkat pendukungnya.</p>
                                        <p>Konsentrasi Multimedia meliputi Perancang, Pembuat, dan Technopreneur bidang
                                            perangkat lunak berupa audio, video, pengolahan teks. Perancang, Pembuat,
                                            dan Technopreneur bidang animasi pada perangkat mobile, desktop, dan
                                            jaringan..</p>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="/landing/assets/images/choose-us-image-03.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Fasilitas</h4>
                                        <p>Laboratorium Jaringan Komputer.
                                            <br>Laboratorium Basisdata.
                                            <br>Laboratorium Internet dan Web.
                                            <br>Laboratorium Komputasi.
                                            <br>Laboratorium Multimedia.
                                            <br>Laboratorium Pemrograman Komputer.
                                            <br>Laboratorium Sistem Informasi.
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section coming-soon" data-section="section3">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xs-12">
                    <div class="continer centerIt">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="right-content">
                        <div class="top-content">
                            <h6>Login to <strong>SI Absensi Mahasiswa MI</strong></h6>
                        </div>
                        <!-- <form id="contact" action="" method="get"> -->
                        <form id="login" action="/proses_login" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="username" type="text" class="form-control" id="username"
                                            placeholder="Username" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="password" type="password" class="form-control" id="password"
                                            placeholder="Password" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">LOGIN</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section courses" data-section="section4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Job Opportunities</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="/landing/assets/images/courses-01.jpg" alt="Course #1">
                        <div class="down-content">
                            <h4>Digital Marketing</h4>
                            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and
                                Pexels.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/landing/assets/images/courses-02.jpg" alt="Course #2">
                        <div class="down-content">
                            <h4>Business World</h4>
                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac
                                ipsum porta.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/landing/assets/images/courses-03.jpg" alt="Course #3">
                        <div class="down-content">
                            <h4>Media Technology</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/landing/assets/images/courses-04.jpg" alt="Course #4">
                        <div class="down-content">
                            <h4>Communications</h4>
                            <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and
                                Pexels.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/landing/assets/images/courses-05.jpg" alt="">
                        <div class="down-content">
                            <h4>Business Ethics</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/landing/assets/images/courses-01.jpg" alt="">
                        <div class="down-content">
                            <h4>Photography</h4>
                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac
                                ipsum porta.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/landing/assets/images/courses-02.jpg" alt="">
                        <div class="down-content">
                            <h4>Web Development</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/landing/assets/images/courses-03.jpg" alt="">
                        <div class="down-content">
                            <h4>Learn HTML CSS</h4>
                            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and
                                Pexels.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/landing/assets/images/courses-04.jpg" alt="">
                        <div class="down-content">
                            <h4>Social Media</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/landing/assets/images/courses-05.jpg" alt="">
                        <div class="down-content">
                            <h4>Digital Arts</h4>
                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac
                                ipsum porta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section contact" data-section="section6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>CAMPUS ADDRESS</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/place/PSDKU+POLINEMA+di+Kota+Kediri/@-7.803847,111.9768121,17z/data=!4m12!1m6!3m5!1s0x2e7856c8ee550497:0x3f8ff2e0bc9b9718!2sPSDKU+POLINEMA+di+Kota+Kediri!8m2!3d-7.8038523!4d111.9790008!3m4!1s0x2e7856c8ee550497:0x3f8ff2e0bc9b9718!8m2!3d-7.8038523!4d111.9790008"
                            width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/place/PSDKU+POLINEMA+di+Kota+Kediri/@-7.803847,111.9768121,17z/data=!4m12!1m6!3m5!1s0x2e7856c8ee550497:0x3f8ff2e0bc9b9718!2sPSDKU+POLINEMA+di+Kota+Kediri!8m2!3d-7.8038523!4d111.9790008!3m4!1s0x2e7856c8ee550497:0x3f8ff2e0bc9b9718!8m2!3d-7.8038523!4d111.9790008"
                            width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><i class="fa fa-copyright"></i> 2021 - All rights reserved - Manajemen Informatika
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="/landing/vendor/jquery/jquery.min.js"></script>
    <script src="/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/landing/assets/js/isotope.min.js"></script>
    <script src="/landing/assets/js/owl-carousel.js"></script>
    <script src="/landing/assets/js/lightbox.js"></script>
    <script src="/landing/assets/js/tabs.js"></script>
    <script src="/landing/assets/js/video.js"></script>
    <script src="/landing/assets/js/slick-slider.js"></script>
    <script src="/landing/assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
            if ($(e.target).hasClass('external')) {
                return;
            }
            e.preventDefault();
            $('#menu').removeClass('active');
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });

    </script>
</body>

</html>
