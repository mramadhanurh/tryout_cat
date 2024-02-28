<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('beranda/images/logobimbelkuid.jpg') }}">
    <title>Bimbelku ID</title>

    <style>
        .logo-image {
            border-radius: 50%;
            overflow: hidden;
        }
    </style>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('beranda/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('beranda/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('beranda/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('beranda/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('beranda/css/tooplate-gotto-job.css') }}" rel="stylesheet">

</head>

<body id="top">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <img src="{{ asset('beranda/images/logobimbelkuid.jpg') }}" class="img-fluid logo-image">

                <div class="d-flex flex-column">
                    <strong class="logo-text">BIMBELKU ID</strong>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-center ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#testimoni">Testimoni</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/ranking">Ranking</a>
                    </li>

                    <li class="nav-item ms-lg-auto">

                    </li>

                    <li class="nav-item">
                        <a class="nav-link custom-btn btn" href="/daftar"><i class="bi bi-person-plus"></i> Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="hero-section d-flex justify-content-center align-items-center">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <div class="hero-section-text mt-5">
                            <h4 class="text-white">Bimbelku ID</h4>

                            <p>
                                <span style="color:#ffffff">Platform Ujian CAT dan Bimbingan Online dengan berbagai fitur dan layanan yang
                                    mendukung proses dan persiapan menghadapi ujian / seleksi di tempat impianmu. Ayo bergabung sekarang!</span>
                            </p>

                            <a href="/login" class="custom-btn custom-border-btn btn"><i class="bi bi-box-arrow-in-right"></i> <b>Login</b></a>
                            <a href="/daftar" class="custom-btn custom-border-btn btn"><i class="bi bi-person-plus"></i> <b>Daftar</b></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('beranda/images/SeleksiCPNS.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 2%;">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('beranda/images/TestCPNS.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 2%;">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('beranda/images/bg-section.jpeg') }}" class="d-block w-100" alt="..." style="border-radius: 2%;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="categories-section section-padding" id="categories-section">
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-5">Keuntungan Ikut Bimbelku</h2>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block">
                            <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-globe"></i>

                                <small class="categories-block-title">MUDAH DIAKSES</small>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block">
                            <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-book"></i>

                                <small class="categories-block-title">SOAL LENGKAP</small>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block">
                            <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-lightbulb"></i>

                                <small class="categories-block-title">MENTOR TERBAIK</small>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block">
                            <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-file-slides"></i>

                                <small class="categories-block-title">LIVE RANKING</small>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- <section class="about-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12">
                        <div class="about-image-wrap custom-border-radius-start">
                            <img src="{{ asset('beranda/images/professional-asian-businesswoman-gray-blazer.jpg') }}" class="about-image custom-border-radius-start img-fluid" alt="">

                            <div class="about-info">
                                <h4 class="text-white mb-0 me-2">Julia Ward</h4>

                                <p class="text-white mb-0">Investor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-block">
                            <h2 class="text-white mb-2">Introduction Gotto</h2>

                            <p class="text-white">Gotto Job is a free website template for job portals. This layout is based on Bootstrap 5 CSS framework. Thank you for visiting <a href="https://www.tooplate.com" target="_parent">Tooplate website</a>. Images are from <a href="https://www.freepik.com/" target="_blank">FreePik</a> website.</p>

                            <div class="custom-border-btn-wrap d-flex align-items-center mt-5">
                                <a href="about.html" class="custom-btn custom-border-btn btn me-4">Get to know us</a>

                                <a href="#job-section" class="custom-link smoothscroll">Explore Jobs</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-12">
                        <div class="instagram-block">
                            <img src="{{ asset('beranda/images/horizontal-shot-happy-mixed-race-females.jpg') }}" class="about-image custom-border-radius-end img-fluid" alt="">

                            <div class="instagram-block-text">
                                <a href="https://instagram.com/" class="custom-btn btn">
                                    <i class="bi-instagram"></i>
                                    @Gotto
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->


        <!-- <section class="job-section job-featured-section section-padding" id="job-section">
        </section> -->


        <section>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-block custom-border-radius-start">
                            <h2 class="text-white mb-3">Lebih Dari 71.283</h2>

                            <p class="text-white">Peserta Bimbelkuid Dalam Persiapan Untuk Seleksi PPPK | CPNS | BUMN | DLL</p>
                            <br>

                            <h2 class="text-white">Daftar Program Tryout Nasional SKD CPNS 2024</h2>
                            <p class="text-white">Klik Link Disamping >></p>

                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="video-thumb">
                            <img src="{{ asset('beranda/images/CPNS2024.5.jpg') }}" class="about-image custom-border-radius-end img-fluid" alt="">

                            <div class="video-info">
                                <a href="http://wa.me/62881082508828" class="youtube-icon bi bi-whatsapp"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="reviews-section section-padding" id="testimoni">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h2 class="text-center mb-5">Cerita Sukses di 2023</h2>

                        <div class="owl-carousel owl-theme reviews-carousel">
                            <div class="reviews-thumb">

                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{asset('testimoni')}}/01t.jpg" class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Delly</strong>
                                            <small>Nilai Total : 489</small>
                                        </p>

                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="{{ asset('beranda/images/left-quote.png') }}" class="quote-icon img-fluid" alt="">

                                    <h4 class="reviews-title">Testimoni Bimbel: terimakasih atas TO nya gak nyesel belajar disini bimbingan nya bagus banget makasi ya 🤗 Alhamdulilah saya lolos Ka peringkat 1</h4>
                                </div>
                            </div>

                            <div class="reviews-thumb">
                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{asset('testimoni')}}/02t.jpg" class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Yuyu</strong>
                                            <small>Nilai Total : 437</small>
                                        </p>

                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="{{ asset('beranda/images/left-quote.png') }}" class="quote-icon img-fluid" alt="">

                                    <h4 class="reviews-title">Testimoni Bimbel : terimakasih para mentor penjelasanx mudah dipahami dan soal2x mirip dg soal p3k..peringkat 1 dit4 sya kerja..sukses sllu bimbelkuid</h4>
                                </div>
                            </div>

                            <div class="reviews-thumb">

                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{asset('testimoni')}}/03t.jpg" class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Zahroh</strong>
                                            <small>Nilai Total : 543</small>
                                        </p>

                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="{{ asset('beranda/images/left-quote.png') }}" class="quote-icon img-fluid" alt="">

                                    <h4 class="reviews-title">Testimoni Bimbel: Terimakasih kak SDH memfasilitasi bimbel dan tryout ", Alhamdulillah bisa lulus P3K Bidan Ahli THN ini.🤲</h4>
                                </div>
                            </div>

                            <div class="reviews-thumb">
                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{asset('testimoni')}}/06t.jpg" class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Sanie Noviana</strong>
                                            <small>Nilai Total : 510</small>
                                        </p>

                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="{{ asset('beranda/images/left-quote.png') }}" class="quote-icon img-fluid" alt="">

                                    <h4 class="reviews-title">Testimoni Bimbel : Alhamdulillah lolos di peringkat 1 bidan terampil. Terimakasih bimbelku.id materi nya lengkap jadi ga ribet cari materi yang ada d kisi-kisi dan latihan soal nya juga sangat membantu, banyak soal yang mirip mirip keluar saat tes</h4>
                                </div>
                            </div>

                            <div class="reviews-thumb">
                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{asset('testimoni')}}/oo2o.jpg" class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Erna Yukriyah</strong>
                                            <small>Nilai Total : 472</small>
                                        </p>

                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="{{ asset('beranda/images/left-quote.png') }}" class="quote-icon img-fluid" alt="">

                                    <h4 class="reviews-title">Testimoni Bimbel : Terima kasih,soal2 TO sangat membatu 🙏Saya dari Kalimantan Tengah, sangat2 berterimakasih kepada Bimbelkuid🥰</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="cta-section">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-10">
                        <h2 class="text-white mb-2">Kontak Bimbelku ID</h2>

                        <p class="text-white">Ada yang ingin ditanyakan? Informasi lebih lanjut bisa hubungi</p>
                    </div>

                    <div class="col-lg-4 col-12 ms-auto">
                        <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                            <a href="https://t.me/+6_56sAmKwIVmODg1" class="custom-btn custom-border-btn btn me-4">Join Grub Telegram</a>

                            <a href="http://wa.me/62881082508828" class="custom-link">Chat WA</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="d-flex align-items-center mb-4">
                        <img src="{{ asset('beranda/images/logobimbelkuid.jpg') }}" class="img-fluid logo-image">

                        <div class="d-flex flex-column">
                            <strong class="logo-text">BIMBELKU ID</strong>
                        </div>
                    </div>

                    <p class="mb-2">
                        <i class="custom-icon bi-globe me-1"></i>

                        <a href="#" class="site-footer-link">
                            www.bimbelku.com
                        </a>
                    </p>

                    <p class="mb-2">
                        <i class="custom-icon bi-telephone me-1"></i>

                        <a href="tel: 0881082508828" class="site-footer-link">
                            0881082508828
                        </a>
                    </p>

                    <p>
                        <i class="custom-icon bi-envelope me-1"></i>

                        <a href="mailto:bimbelkuid@gmail.com" class="site-footer-link">
                            bimbelkuid@gmail.com
                        </a>
                    </p>

                </div>

                <div class="col-lg-2 col-md-3 col-6 ms-lg-auto">
                    <h6 class="site-footer-title">Menu</h6>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="/" class="footer-menu-link">Home</a></li>

                        <li class="footer-menu-item"><a href="#testimoni" class="footer-menu-link">Testimoni</a></li>

                        <li class="footer-menu-item"><a href="/ranking" class="footer-menu-link">Ranking</a></li>

                    </ul>
                </div>

                <div class="col-lg-6 col-md-8 col-12 mt-3 mt-lg-0">
                    <p>Kepercayaan adalah prioritas utama kami. Kami memahami bahwa bimbingan online yang terpercaya adalah kunci keberhasilan Anda dalam pendidikan. Oleh karena itu, semua tutor yang bekerja dengan Bimbelku.id telah melalui proses seleksi ketat dan telah terverifikasi untuk memastikan bahwa Anda mendapatkan bimbingan terbaik.</p>

                    <p><b>-CEO F.Sigit Dwi-</b></p>
                </div>

            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 d-flex align-items-center">
                        <p class="copyright-text">Copyright © Bimbelku ID 2024</p>


                    </div>

                    <div class="col-lg-5 col-12 mt-2 mt-lg-0">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="https://www.instagram.com/bimbelkuid" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.tiktok.com/@bimbelkuid" class="social-icon-link bi-tiktok"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-12 mt-2 d-flex align-items-center mt-lg-0">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy Policy</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Terms</a></li>
                    </div>

                    <a class="back-top-icon bi-arrow-up smoothscroll d-flex justify-content-center align-items-center" href="#top"></a>

                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('beranda/js/jquery.min.js') }}"></script>
    <script src="{{ asset('beranda/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('beranda/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('beranda/js/counter.js') }}"></script>
    <script src="{{ asset('beranda/js/custom.js') }}"></script>

</body>

</html>