@extends('layout.v_template')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-3"><span class="text-muted fw-light">Edit Data</span> Soal</h4>
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

                    <form action="{{ route('datasoal.update') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="soal" class="form-label">Soal</label>
                            <input type="hidden" name="id" value="{{ $data['Info']->id }}">
                            <textarea name="question_text" id="soal" class="form-control" cols="3" rows="6">{{ $data['Info']->question_text }}</textarea>
                            <span style="color:red">@error('question_text') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                            <a href="{{ route('datasoal.index') }}" class="btn btn-warning">
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