@extends('layout.v_template')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-3"><span class="text-muted fw-light">Data Utama /</span> Peserta</h4>

    <div class="card">
        <div class="card-header">
            <div class="head-label">
                <h5 class="card-title mb-0">Data Peserta</h5>
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
                <br><br>
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($user as $item)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
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