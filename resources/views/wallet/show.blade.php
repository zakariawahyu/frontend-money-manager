@extends('layouts.master')

@section('title', 'Show Wallet - Money Manager')

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Show Wallet</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Money Manager</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Wallet</a></li>
                        <li class="breadcrumb-item active">Show</li>
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
                            <div class="form-group row">
                                <label class="col-sm-1">Nama Wallet</label>
                                <div class="col-sm-11">
                                    <label for="">{{ $wallet['data']['name_wallet'] }}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-1">Saldo</label>
                                <div class="col-sm-11">
                                    <label for="">Rp. {{ number_format($wallet['balance'], 0, ',', '.') }}</label>
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
