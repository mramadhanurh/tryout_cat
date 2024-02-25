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

    <!-- SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
    <form action="{{ route('exams/finish') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-8">
                @foreach ($questions as $question)
                    <div class="card question">
                        <h4>
                            PERTANYAAN NO. {{ $questionNumber }}:
                        </h4>
                        <h2>
                            <br>{!! $question->question_text !!}
                            <input type="hidden" name="question_id[]" value="{{ $question->id }}">
                        </h2>
                        <ul class="answers">
                            @foreach ($question->answers as $answer)
                                <li>
                                    <input type="radio" id="answer_{{ $answer->id }}" name="answer_id[]"
                                        value="{{ $answer->id }}" data-question-id="{{ $question->id }}">
                                    <label for="answer{{ $answer->id }}">{{ $answer->answer_text }}</label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @php
                        $questionNumber++;
                    @endphp
                @endforeach

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
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="score" value="100">
                                <input type="hidden" name="times" value="60">
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <td>Sisa Waktu</td>
                                <td>:</td>
                                <td>
                                    <div id="timer">00:00:00</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    {{-- <div class="card-foot">
                        <a class="btn btn-warning btn-block" href="{{ route('home') }}">
                            Kembali
                        </a>
                    </div> --}}
                </div>
                @if ($getAllQuestions->count() > 0)
                    <div>
                        @for ($i = 1; $i <= $getAllQuestions->count(); $i++)
                            <a href="{{ url('/exams?page=' . $i) }}"
                                class="number {{ $questions->currentPage() == $i ? 'active' : '' }}">{{ $i }}</a>
                        @endfor
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        @if ($questions->previousPageUrl())
                            <a href="{{ $questions->previousPageUrl() }}" type="btn"
                                class="btn btn-danger btn-block">
                                < Sebelumnya </a>
                        @endif
                    </div>
                    <div class="col-md-6">
                        @if ($questions->nextPageUrl())
                            <a href="{{ $questions->nextPageUrl() }}" type="btn" class="btn btn-success btn-block">
                                Next >
                            </a>
                        @endif
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-info btn-block">Submit</button>
            </div>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selectedAnswers = JSON.parse(localStorage.getItem('selectedAnswers')) || {};

            var radioButtons = document.querySelectorAll('input[type="radio"]');
            radioButtons.forEach(function(radioButton) {
                var questionId = radioButton.getAttribute('data-question-id');
                if (selectedAnswers[questionId] && selectedAnswers[questionId] === radioButton.value) {
                    radioButton.checked = true;
                }
                radioButton.addEventListener('change', function() {
                    var selectedAnswer = this.value;
                    selectedAnswers[questionId] = selectedAnswer;
                    localStorage.setItem('selectedAnswers', JSON.stringify(selectedAnswers));
                });
            });
        });

        var timeInSeconds = localStorage.getItem('timer') ||
            6600; // Ambil nilai timer dari local storage atau gunakan nilai default (110 menit)
        var startTime = localStorage.getItem('startTime') || Math.floor(Date.now() /
            1000); // Ambil waktu mulai dari local storage atau gunakan waktu sekarang
        var timerDisplay = document.getElementById('timer');

        function formatTime(seconds) {
            var hours = Math.floor(seconds / 3600);
            var minutes = Math.floor((seconds % 3600) / 60);
            var remainingSeconds = seconds % 60;

            // Tambahkan kode untuk memastikan format waktu yang benar
            hours = ('0' + hours).slice(-2);
            minutes = ('0' + minutes).slice(-2);
            remainingSeconds = ('0' + remainingSeconds).slice(-2);

            return hours + ':' + minutes + ':' + remainingSeconds;
        }


        function updateTimer() {
            timerDisplay.textContent = formatTime(timeInSeconds);
            if (timeInSeconds > 0) {
                timeInSeconds--;
                localStorage.setItem('timer', timeInSeconds); // Simpan nilai timer ke local storage setiap detik
            } else {
                clearInterval(intervalId);
                // Lakukan tindakan lain jika diperlukan saat waktu habis
                // Contoh: window.location.href = '/submit-answers';
            }
        }

        // Hitung ulang waktu yang tersisa berdasarkan waktu mulai dan waktu sekarang
        timeInSeconds -= Math.floor(Date.now() / 1000) - startTime;

        // Mulai ulang interval dengan waktu yang tersisa
        var intervalId = setInterval(updateTimer, 1000);

        window.addEventListener('beforeunload', function(event) {
            clearInterval(intervalId);
            localStorage.removeItem('timer'); // Hapus timer dari local storage saat halaman ditutup
        });

        // Simpan waktu mulai ke local storage saat halaman dimuat
        localStorage.setItem('startTime', startTime);

        // Tambahkan event listener pada tombol submit
        var submitButton = document.querySelector('button[type="submit"]');
        submitButton.addEventListener('click', function(event) {
            // Mencegah perilaku default dari tombol submit
            event.preventDefault();

            // Hapus nilai radio button yang tersimpan di local storage
            localStorage.removeItem('selectedAnswers');
            // Hentikan timer
            clearInterval(intervalId);
            // Hapus timer dari local storage
            localStorage.removeItem('timer');
            // Reset ulang nilai timeInSeconds
            timeInSeconds = 6600; // Atur kembali ke nilai awal (110 menit dalam detik)
            localStorage.setItem('timer', timeInSeconds); // Simpan nilai timer ke local storage
            // Perbarui startTime
            startTime = Math.floor(Date.now() / 1000);
            localStorage.setItem('startTime', startTime); // Simpan waktu mulai ke local storage
            // Tampilkan SweetAlert
            Swal.fire({
                title: 'Anda yakin ingin submit ujian?',
                text: 'Anda tidak dapat mengubah jawaban setelah ujian disubmit.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, submit!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika tombol "Ya, submit!" ditekan
                    Swal.fire(
                        'Submitted!',
                        'Ujian Anda telah berhasil disubmit.',
                        'success'
                    )
                    // Submit formulir
                    this.form.submit();
                }
            })
        });
    </script>

</body>

</html>
