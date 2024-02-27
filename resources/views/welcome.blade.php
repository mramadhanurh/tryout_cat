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
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#testimoni">Testimoni</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
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
                        <h2 class="mb-5">Browse by <span>Categories</span></h2>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block">
                            <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-window"></i>

                                <small class="categories-block-title">Web design</small>

                                <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                    <span class="categories-block-number-text">320</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block">
                            <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-twitch"></i>

                                <small class="categories-block-title">Marketing</small>

                                <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                    <span class="categories-block-number-text">180</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block">
                            <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-play-circle-fill"></i>

                                <small class="categories-block-title">Video</small>

                                <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                    <span class="categories-block-number-text">340</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block">
                            <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-globe"></i>

                                <small class="categories-block-title">Websites</small>

                                <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                    <span class="categories-block-number-text">140</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-block">
                            <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="categories-icon bi-people"></i>

                                <small class="categories-block-title">Customer Support</small>

                                <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                    <span class="categories-block-number-text">84</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="about-section">
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
        </section>


        <section class="job-section job-featured-section section-padding" id="job-section">
        </section>


        <section>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-block custom-border-radius-start">
                            <h2 class="text-white mb-3">Gotto helps you an easier way to get new job</h2>

                            <p class="text-white">You are not allowed to redistribute the template ZIP file on any other template collection website. Please contact us for more info. Thank you.</p>

                            <div class="d-flex mt-4">
                                <div class="counter-thumb">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="12" data-speed="1000"></span>
                                        <span class="counter-number-text">M</span>
                                    </div>

                                    <span class="counter-text">Daily active users</span>
                                </div>

                                <div class="counter-thumb">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="450" data-speed="1000"></span>
                                        <span class="counter-number-text">k</span>
                                    </div>

                                    <span class="counter-text">Opening jobs</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="video-thumb">
                            <img src="{{ asset('beranda/images/people-working-as-team-company.jpg') }}" class="about-image custom-border-radius-end img-fluid" alt="">

                            <div class="video-info">
                                <a href="https://www.youtube.com/tooplate" class="youtube-icon bi-youtube"></a>
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
                        <h2 class="text-center mb-5">Happy customers</h2>

                        <div class="owl-carousel owl-theme reviews-carousel">
                            <div class="reviews-thumb">

                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{ asset('beranda/images/avatar/portrait-charming-middle-aged-attractive-woman-with-blonde-hair.jpg') }}" class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Susan L</strong>
                                            <small>Product Manager</small>
                                        </p>

                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="{{ asset('beranda/images/left-quote.png') }}" class="quote-icon img-fluid" alt="">

                                    <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                                </div>
                            </div>

                            <div class="reviews-thumb">
                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{ asset('beranda/images/avatar/medium-shot-smiley-senior-man.jpg') }}" class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Jack</strong>
                                            <small>Technical Lead</small>
                                        </p>

                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="{{ asset('beranda/images/left-quote.png') }}" class="quote-icon img-fluid" alt="">

                                    <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                                </div>
                            </div>

                            <div class="reviews-thumb">

                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{ asset('beranda/images/avatar/portrait-beautiful-young-woman.jpg') }}" class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Haley</strong>
                                            <small>Sales & Marketing</small>
                                        </p>

                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="{{ asset('beranda/images/left-quote.png') }}" class="quote-icon img-fluid" alt="">

                                    <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                                </div>
                            </div>

                            <div class="reviews-thumb">
                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{ asset('beranda/images/avatar/blond-man-happy-expression.jpg') }}" class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Jackson</strong>
                                            <small>Dev Ops</small>
                                        </p>

                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="{{ asset('beranda/images/left-quote.png') }}" class="quote-icon img-fluid" alt="">

                                    <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                                </div>
                            </div>

                            <div class="reviews-thumb">
                                <div class="reviews-info d-flex align-items-center">
                                    <img src="{{ asset('beranda/images/avatar/university-study-abroad-lifestyle-concept.jpg') }}" class="avatar-image img-fluid" alt="">

                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="mb-0">
                                            <strong>Kevin</strong>
                                            <small>Internship</small>
                                        </p>

                                    </div>
                                </div>

                                <div class="reviews-body">
                                    <img src="{{ asset('beranda/images/left-quote.png') }}" class="quote-icon img-fluid" alt="">

                                    <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
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
                        <h2 class="text-white mb-2">Over 10k opening jobs</h2>

                        <p class="text-white">If you are looking for free HTML templates, you may visit Tooplate website. If you need a collection of free templates, you can visit Too CSS website.</p>
                    </div>

                    <div class="col-lg-4 col-12 ms-auto">
                        <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                            <a href="#" class="custom-btn custom-border-btn btn me-4">Create an account</a>

                            <a href="#" class="custom-link">Post a job</a>
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
                            www.jobbportal.com
                        </a>
                    </p>

                    <p class="mb-2">
                        <i class="custom-icon bi-telephone me-1"></i>

                        <a href="tel: 305-240-9671" class="site-footer-link">
                            305-240-9671
                        </a>
                    </p>

                    <p>
                        <i class="custom-icon bi-envelope me-1"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            info@jobportal.co
                        </a>
                    </p>

                </div>

                <div class="col-lg-2 col-md-3 col-6 ms-lg-auto">
                    <h6 class="site-footer-title">Company</h6>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">About</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Blog</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Jobs</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <h6 class="site-footer-title">Resources</h6>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Guide</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">How it works</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Salary Tool</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-8 col-12 mt-3 mt-lg-0">
                    <h6 class="site-footer-title">Newsletter</h6>

                    <form class="custom-form newsletter-form" action="#" method="post" role="form">
                        <h6 class="site-footer-title">Get notified jobs news</h6>

                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="bi-person"></i></span>

                            <input type="text" name="newsletter-name" id="newsletter-name" class="form-control" placeholder="yourname@gmail.com" required>

                            <button type="submit" class="form-control">
                                <i class="bi-send"></i>
                            </button>
                        </div>
                    </form>
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
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-youtube"></a>
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