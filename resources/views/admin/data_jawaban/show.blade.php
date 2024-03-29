@extends('layout.v_template')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-3"><span class="text-muted fw-light">Detail Data</span> Jawaban</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">

                        <div class="mb-3">
                            <label for="soal" class="form-label">Soal</label>
                            {!! $data->soal->question_text !!}
                        </div>

                        <div class="mb-3">
                            <label for="answer" class="form-label">Pilihan Ganda</label>
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <p>{{ $data->answer_text }}</p>
                        </div>

                        <div class="mb-3">
                            <label for="weight" class="form-label">Bobot Nilai</label>
                            <p>{{ $data->weight }}</p>
                        </div>
                        <div class="mb-3">
                            <a href="{{ route('datajawaban.index') }}" class="btn btn-warning">
                                Kembali
                            </a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection