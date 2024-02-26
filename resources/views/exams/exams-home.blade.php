<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ujian Tryout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            padding: 50px;
        }

        .question {
            /* background-color: #fff; */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .question h2 {
            margin-top: 0;
        }

        .question h4 {
            font-weight: 700;
        }

        .answers {
            margin-left: 20px;
            list-style-type: none;
            padding: 0;
        }

        .answers li {
            margin-bottom: 5px;
        }

        .nav-links {
            margin-top: 20px;
        }

        .number {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin-bottom: 10px;
            display: inline-block;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 40px;
            /* Menentukan lebar tombol */
            height: 40px;
            /* Menentukan tinggi tombol */
            text-align: center;
            /* Membuat teks berada di tengah tombol */
            /* line-height: 40px; Mengatur ketinggian teks di dalam tombol */
        }

        .number:hover {
            background-color: #f0f0f0;
        }

        .pagination {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-8">
            <div class="card question">
                <div class="card-header">
                    <b>Daftar Test</b>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>{{ $info->judul }}</td>
                            <td>{{ $jmlSoal }} soal / {{ $info->waktu }} menit</td>
                            <td>
                                <a href="{{ route('exams') }}" type="button" id="mulaiButton"
                                    class="btn btn-success btn-block">Mulai</a>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card question">
                <div class="card-header">
                    <b>Data Diri</b>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-foot">
                    <a class="btn btn-danger btn-block" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sisipkan skrip JavaScript di bagian bawah halaman -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('mulaiButton').addEventListener('click', function(event) {
            event.preventDefault();

            Swal.fire({
                title: 'Yakin akan mengikuti ujian?',
                text: "Anda tidak akan dapat mengakhiri ujian setelah memulainya!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Mulai!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect pengguna ke halaman /exams
                    window.location.href = "{{ route('exams') }}";
                }
            });
        });
    </script>


</body>

</html>
