@extends('layouts.master')

@section('title', 'Create Wallet - Money Manager')

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Create Wallet</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Money Manager</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Wallet</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>

                    <div class="text-right">
                        <a class="btn btn-primary btn-lg waves-effect waves-ligh" href="{{ route('wallet.index') }}"><i class="mdi mdi-keyboard-backspace"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <form action="{{ route('wallet.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama Wallet</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Input nama wallet" name="name_wallet" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Saldo</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" placeholder="Input saldo awal" name="balance" required=''>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end mb-0">
                                    <div class="col-md-10 pl-md-2">
                                        <button class="btn btn-primary btn-lg waves-effect waves-ligh">Submit</button>
                                        <a href="{{ route('wallet.index') }}" class="btn btn-light btn-lg waves-effect waves-ligh">Cancel</a>
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
