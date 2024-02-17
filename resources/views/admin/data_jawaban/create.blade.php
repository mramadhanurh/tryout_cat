@extends('layout.v_template')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-3"><span class="text-muted fw-light">Tambah Data</span> Jawaban</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">

                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif

                    <form action="{{ route('datajawaban.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="soal" class="form-label">Soal</label>
                            <select name="question_id" class="form-control">
                                    <option value="" selected disabled>--Pilih Soal--</option>
                                @foreach($soal as $sa)
                                    <option value="{{ $sa->id }}">{!! $sa->question_text !!}</option>
                                @endforeach
                            </select>
                            <span style="color:red">@error('question_id') {{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="answer" class="form-label">Pilihan Ganda</label>
                            <!-- <textarea name="question_text" id="soal" class="form-control" cols="3" rows="6">{{ old('question_text') }}</textarea> -->
                            <input type="text" name="answer_text" id="answer" class="form-control">
                            <span style="color:red">@error('answer_text') {{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="weight" class="form-label">Bobot Nilai</label>
                            <!-- <textarea name="question_text" id="soal" class="form-control" cols="3" rows="6">{{ old('question_text') }}</textarea> -->
                            <input type="text" name="weight" id="weight" class="form-control">
                            <span style="color:red">@error('weight') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                            <a href="{{ route('datajawaban.index') }}" class="btn btn-warning">
                                Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection