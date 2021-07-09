@extends('layouts.master')

@section('title', 'Create Category - Money Manager')

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Create Category</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Money Manager</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                        <li class="breadcrumb-item active">Create</li>
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
                            <form action="{{ route('category.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Input nama kategori" name="name_category" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Tipe Transaksi</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2 select" name="id_transaction_type">
                                            <option value="">Select Tipe Transaksi</option>
                                            @foreach ($transactionTypes['data'] as $transactionType)
                                                <option value="{{ $transactionType['id'] }}">{{ $transactionType['name_transaction_type'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end mb-0">
                                    <div class="col-md-10 pl-md-2">
                                        <button class="btn btn-primary btn-lg waves-effect waves-ligh">Submit</button>
                                        <a href="{{ route('category.index') }}" class="btn btn-light btn-lg waves-effect waves-ligh">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
