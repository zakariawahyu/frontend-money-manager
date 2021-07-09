@extends('layouts.master')

@section('title', 'Wallet - Money Manager')

@section('extend-css')
    <!-- DataTables -->
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet') }}" type="text/css" />
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Wallet</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Money Manager</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Wallet</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>

                    <div class="text-right">
                        <a class="btn btn-primary btn-lg waves-effect waves-ligh" href="/"><i class="mdi mdi-plus"></i> Add Wallet</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Nama Wallet</th>
                                    <th>Saldo</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wallets['data'] as $wallet)
                                        <tr>
                                            <td>{{ $wallet['name_wallet'] }}</td>
                                            <td>Rp. {{ number_format($wallet['balance'], 0, ',', '.') }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('wallet.show', $wallet['id']) }}" class="btn ripple btn-dark btn-sm"><i class="mdi mdi-eye"></i></a>
                                                <a href="{{ route('wallet.edit', $wallet['id']) }}" class="btn ripple btn-info btn-sm"><i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="{{ route('wallet.edit', $wallet['id']) }}" class="btn ripple btn-danger btn-sm"><i class="mdi mdi-delete-empty "></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('extend-js')
    <!-- Required datatable js -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/vfs_fonts.j') }}s"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets/pages/datatables.init.js') }}"></script>
@endsection
