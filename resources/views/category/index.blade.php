@extends('layouts.master')

@section('title', 'Category - Money Manager')

@section('extend-css')
    <!-- DataTables -->
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet') }}" type="text/css" />

    <!---Sweet-Alert css-->
    <link href="{{ asset('assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Category</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Money Manager</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>

                    <div class="text-right">
                        <a class="btn btn-primary btn-lg waves-effect waves-ligh" href="{{ route('category.create') }}"><i class="mdi mdi-plus"></i> Add Category</a>
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
                                    <th>Nama</th>
                                    <th>Tipe Transaksi</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories['data'] as $category)
                                        <tr>
                                            <td>{{ $category['name_category'] }}</td>
                                            @foreach ($transactionTypes['data'] as $transactionType)
                                                @if ($transactionType['id'] == $category['id_transaction_type'])
                                                <td>{{ $transactionType['name_transaction_type'] }}</td>
                                                @endif
                                            @endforeach
                                            <td class="text-center">
                                                <a href="{{ route('category.show', $category['id']) }}" class="btn ripple btn-dark btn-sm"><i class="mdi mdi-eye"></i></a>
                                                <a href="{{ route('category.edit', $category['id']) }}" class="btn ripple btn-info btn-sm"><i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0)" data-url="{{ route('category.destroy', $category['id']) }}" class="swal-delete btn ripple btn-danger btn-sm"><i class="mdi mdi-delete-empty"></i></a>
                                                @csrf
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

    <!-- Sweet-Alert js-->
    <script src="{{ asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweet-alert/jquery.sweet-alert.js') }}"></script>
@endsection
