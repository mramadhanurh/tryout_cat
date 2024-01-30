@extends('layout.v_template')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-3"><span class="text-muted fw-light">Data Dasar /</span> Soal</h4>

    <div class="card">
        <div class="card-header">
            <div class="head-label">
                <h5 class="card-title mb-0">Data Soal</h5>
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
                            <a href="{{ route('datasoal.create') }}" type="button" class="btn btn-secondary create-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                                <span><i class="bx bx-plus me-1"></i>
                                    <span class="d-none d-lg-inline-block">Tambah Data</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Soal</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($soal as $item)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $item->question_text }}</td>
                            <td class="text-center" width="200">
                                <form action="{{ route('datasoal.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a type="button" class="btn btn-sm btn-primary" href="#">
                                        <i class="bx bx-detail me-1"></i> Detail
                                    </a>
                                    <a type="button" class="btn btn-sm btn-warning" href="{{ route('datasoal.edit', $item->id) }}">
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