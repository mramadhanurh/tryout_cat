@extends('layout.v_template')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-3"><span class="text-muted fw-light">Detail Data</span> Soal</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">

                        <div class="mb-3">
                            <label for="tipe" class="form-label">Tipe Soal</label>
                            <p>{{ $data->tipeSoal->tipe_soal }}</p>
                        </div>
                        
                        <div class="mb-3">
                            <label for="soal" class="form-label">Soal</label>
                            {!! $data->question_text !!}
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('datasoal.index') }}" class="btn btn-warning">
                                Kembali
                            </a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection