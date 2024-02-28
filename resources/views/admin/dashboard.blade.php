@extends('layout.v_template')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat Datang Kembali Admin! 🎉</h5>
                            <p class="mb-4">
                                Yuk pantau terus peserta ujian agar berjalan lancar
                            </p>

                            <a href="/ranking" class="btn btn-sm btn-outline-primary">View Ranking</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{asset('template')}}/assets/img/illustrations/girl-doing-yoga-light.png" height="170" alt="View Badge User" data-app-dark-img="illustrations/girl-doing-yoga-light.png" data-app-light-img="illustrations/girl-doing-yoga-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('template')}}/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-medium d-block mb-1">Tipe Soal</span>
                            <h3 class="card-title mb-2">{{ $totalTipeSoal }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('template')}}/assets/img/icons/unicons/chart.png" alt="Credit Card" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-medium d-block mb-1">Soal</span>
                            <h3 class="card-title mb-2">{{ $totalSoal }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="row">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Daftar Peserta Ujian Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            @foreach($latestDaftarUjian as $data)
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{asset('template')}}/assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h5 class="mb-0">{{ $data->user->name }}</h5>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <span class="text-muted">Score</span>
                                        <h6 class="mb-0">{{ $data->score }}</h6>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <a href="/admin/dataujian" class="btn rounded-pill btn-outline-primary" type="button">Peserta Lainnya</a>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('template')}}/assets/img/icons/unicons/chart.png" alt="Credit Card" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-medium d-block mb-1">Jawaban</span>
                            <h3 class="card-title mb-2">{{ $totalJawaban }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <?php
                        $tanggalSekarang = \Illuminate\Support\Carbon::now();
                        ?>
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('template')}}/assets/img/icons/unicons/chart-success.png" alt="Credit Card" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-medium d-block mb-1"><?php echo $tanggalSekarang->format('d/m/Y'); ?></span>
                            <h4 class="card-title mb-2" id="clock"></h4>
                        </div>
                    </div>
                </div>
                <!-- </div>
        <div class="row"> -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Tes Ujian</h5>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <h3 class="mb-0">{{ $totalUjian }}</h3>
                                    </div>
                                </div>
                                <div id="profileReportChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function updateClock() {
        var now = new Date();
        var jam = now.getHours();
        var menit = now.getMinutes();
        var detik = now.getSeconds();

        // Format jam, menit, dan detik jika nilai kurang dari 10
        jam = padZero(jam);
        menit = padZero(menit);
        detik = padZero(detik);

        // Update tampilan HTML dengan waktu yang baru
        document.getElementById('clock').innerHTML = jam + ":" + menit + ":" + detik;

        // Panggil fungsi updateClock setiap 1 detik
        setTimeout(updateClock, 1000);
    }

    // Fungsi untuk menambahkan nol di depan angka jika kurang dari 10
    function padZero(i) {
        return (i < 10) ? "0" + i : i;
    }

    // Panggil fungsi updateClock saat halaman dimuat
    window.onload = updateClock;
</script>
@endsection