@extends('layout.v_template')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-3"><span class="text-muted fw-light">Data Dasar /</span> Jawaban</h4>

    <div class="card">
        <div class="card-header">
            <div class="head-label">
                <h5 class="card-title mb-0">Data Jawaban</h5>
            </div>
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
            <div class="table-responsive text-nowrap">
                <div class="dt-action-buttons text-end">
                    <div class="dt-buttons btn-group flex-wrap">
                        <div class="btn-group">
                            <a href="{{ route('datajawaban.create') }}" type="button" class="btn btn-secondary create-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                                <span><i class="bx bx-plus me-1"></i>
                                    <span class="d-none d-lg-inline-block">Tambah Data</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div><br>
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Soal</th>
                            <th>Pilihan Ganda</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($jawaban as $item)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{!! Str::limit($item->soal->question_text, 40) !!}</td>
                            <td>{{ $item->answer_text }}</td>
                            <td class="text-center" width="200">
                                <form action="{{ route('datajawaban.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a type="button" class="btn btn-sm btn-primary" href="{{ route('datajawaban.show', $item->id) }}">
                                        <i class="bx bx-detail me-1"></i> Detail
                                    </a>
                                    <a type="button" class="btn btn-sm btn-warning" href="{{ route('datajawaban.edit', $item->id) }}">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </a>
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        })
    </script>
@endsection