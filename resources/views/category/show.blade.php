@extends('layouts.master')

@section('title', 'Show Category - Money Manager')

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Show Category</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Money Manager</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                        <li class="breadcrumb-item active">Show</li>
                    </ol>

                    <div class="text-right">
                        <a class="btn btn-primary btn-lg waves-effect waves-ligh" href="{{ route('category.index') }}"><i class="mdi mdi-keyboard-backspace"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-1">Nama</label>
                                <div class="col-sm-11">
                                    <label for="">{{ $category['data']['name_category'] }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-1">Tipe Kategori</label>
                                <div class="col-sm-11">
                                    @foreach ($transactionTypes['data'] as $transactionType)
                                        @if ($transactionType['id'] == $category['data']['id_transaction_type'])
                                            <label for="">{{ $transactionType['name_transaction_type'] }}</label>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
