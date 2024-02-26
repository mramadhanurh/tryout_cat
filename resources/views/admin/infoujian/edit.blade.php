@extends('layout.v_template')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-3"><span class="text-muted fw-light">Edit Data</span> Info Ujian</h4>
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

                    <form action="{{ route('infoujian.update') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="tipe" class="form-label">Judul</label>
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <input type="text" name="judul" id="tipe" class="form-control" value="{{ $data->judul }}">
                            <span style="color:red">@error('tipe_soal') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="tipe" class="form-label">Waktu</label>
                            <input type="number" name="waktu" id="waktu" class="form-control" value="{{ $data->waktu }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                            <a href="{{ route('infoujian.index') }}" class="btn btn-warning">
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