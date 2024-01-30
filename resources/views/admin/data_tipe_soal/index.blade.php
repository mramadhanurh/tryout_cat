@extends('layout.v_template')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-3"><span class="text-muted fw-light">Data Dasar /</span> Tipe Soal</h4>

    <div class="card">
        <div class="card-header">
            <div class="head-label">
                <h5 class="card-title mb-0">Data Tipe Soal</h5>
            </div>
            <div class="table-responsive text-nowrap">
                <div class="dt-action-buttons text-end">
                    <div class="dt-buttons btn-group flex-wrap">
                        <div class="btn-group">
                            <a href="#" type="button" class="btn btn-secondary create-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button">
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
                            <th>Nama</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <span class="fw-medium">TKP</span>
                            </td>
                            <td class="text-center" width="200">
                                <form action="#" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a type="button" class="btn btn-sm btn-warning" href="#">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </a>
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                <span class="fw-medium">TWK</span>
                            </td>
                            <td class="text-center" width="200">
                                <form action="#" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a type="button" class="btn btn-sm btn-warning" href="#">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </a>
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                <span class="fw-medium">TIU</span>
                            </td>
                            <td class="text-center" width="200">
                                <form action="#" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a type="button" class="btn btn-sm btn-warning" href="#">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </a>
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection