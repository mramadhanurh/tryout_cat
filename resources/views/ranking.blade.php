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
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />

</head>

<body class="job-listings-page" id="top">

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

        <header class="site-header">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h1 class="text-white">Ranking</h1>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Ranking</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </header>

        <section class="section-padding pb-0 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <form class="custom-form hero-form" role="form">
                            <h2 class="text-white mb-3 text-center">Live Ranking Score</h2>

                            <div class="row">
                                <div class="table-responsive text-nowrap">
                                    <table class="table" id="datatable">
                                        <thead>
                                            <tr>
                                                <th class="text-white">NO</th>
                                                <th class="text-white">NAMA</th>
                                                <th class="text-white">SCORE</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach($rankingscore as $item)
                                            <tr>
                                                <td class="text-white" width="50px">{{ $loop->iteration }}.</td>
                                                <td class="text-white">{{ $item->user->name }}</td>
                                                <td class="text-white">{{ $item->score }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="col-lg-6 col-12">
                        <img src="images/4557388.png" class="hero-image img-fluid" alt="">
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
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();

            setTimeout(function() {
                location.reload();
            }, 30000);
        })
    </script>

</body>

</html>