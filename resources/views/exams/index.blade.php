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
</head>

<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div id="question-container">
                            <!-- Pertanyaan dan pilihan jawaban akan ditampilkan di sini -->
                        </div>
                        <div id="timer-container">
                            Waktu Tersisa: <span id="timer">00:00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var timer;
            var timeRemaining = 20; // Waktu dalam detik (20 detik)

            function startTimer() {
                timer = setInterval(function() {
                    var minutes = Math.floor(timeRemaining / 60);
                    var seconds = timeRemaining % 60;

                    $('#timer').text((minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds);

                    if (timeRemaining <= 0) {
                        clearInterval(timer);
                        alert('Waktu habis!');
                        // Handle logic saat waktu habis
                        disableRadioInputs(); // Menonaktifkan input radio
                    }

                    timeRemaining--;
                }, 1000);
            }

            function loadQuestions() {
                $.ajax({
                    url: '/get-questions',
                    type: 'GET',
                    success: function(data) {
                        // Menampilkan semua pertanyaan dan pilihan jawaban
                        var html = '';

                        $.each(data, function(questionIndex, question) {
                            html += '<h2>' + question.question_text + '</h2>';
                            html += '<ul>';

                            $.each(question.answers, function(answerIndex, answer) {
                                // Menggunakan input type radio
                                html += '<li>';
                                html += '<input type="radio" name="answer' + questionIndex + '" data-weight="' + answer.weight + '" id="answer' + questionIndex + answerIndex + '" class="answer-radio">';
                                html += '<label for="answer' + questionIndex + answerIndex + '">' + answer.answer_text + '</label>';
                                html += '</li>';
                            });

                            html += '</ul>';
                        });

                        $('#question-container').html(html);
                        startTimer(); // Mulai timer setelah pertanyaan dimuat
                    }
                });
            }

            function disableRadioInputs() {
                $('.answer-radio').prop('disabled', true);
            }

            loadQuestions(); // Memuat semua pertanyaan saat halaman dimuat

            // Menangani klik pada jawaban
            $(document).on('change', '#question-container input[type="radio"]', function() {
                var weight = $('input[name^="answer"]:checked').data('weight');

                if (weight !== undefined) {
                    alert('Nilai Bobot: ' + weight); // Ganti dengan logika penyimpanan nilai bobot
                } else {
                    alert('Pilih satu jawaban.'); // Memberikan peringatan jika tidak ada jawaban yang dipilih
                }
                console.log('Nilai Bobot: ' + weight);
            });

        });
    </script>

</body>

</html>