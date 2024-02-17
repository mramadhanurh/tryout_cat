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

                    <form action="{{ route('datasoal.update') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="tipe_soal" class="form-label">Tipe Soal</label>
                            <select name="datatipesoal_id" class="form-control">
                                @foreach($tipe_soal as $tipe)
                                    <option value="{{ $tipe->id }}" {{ $data->datatipesoal_id == $tipe->id ? 'selected' : '' }}>{{ $tipe->tipe_soal }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="soal" class="form-label">Soal</label>
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <textarea name="question_text" id="soal" class="form-control" cols="3" rows="6">{!! $data->question_text !!}</textarea>
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

@section('js')

    <script type="text/javascript">
        ClassicEditor
            .create( document.querySelector( '#soal' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection