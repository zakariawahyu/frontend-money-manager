@extends('layouts.master')

@section('title', 'Create Transaction - Money Manager')

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Create Transaction</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Money Manager</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Transaction</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="page-content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <form action="{{ route('transaction.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" name="date" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2 select" name="id_category">
                                            <option value="">Select Kategori</option>
                                            @foreach ($categories['data'] as $category)
                                                <option value="{{ $category['id'] }}">{{ $category['name_category'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Input jumlah" name="amount" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Input deskripsi" name="note" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Dompet</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2 select" name="id_wallet">
                                            <option value="">Select Dompet</option>
                                            @foreach ($wallets['data'] as $wallet)
                                                <option value="{{ $wallet['id'] }}">{{ $wallet['name_wallet'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end mb-0">
                                    <div class="col-md-10 pl-md-2">
                                        <button class="btn btn-primary btn-lg waves-effect waves-ligh">Submit</button>
                                        <a href="{{ route('transaction.create') }}" class="btn btn-light btn-lg waves-effect waves-ligh">Cancel</a>
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
