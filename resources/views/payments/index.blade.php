@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Payments</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('flash::message')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>
                        Payments
                        <a class="pull-right" href="{{ route('payments.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                    </div>
                    <div class="card-body">
                        @include('payments.table')
                        <div class="pull-right mr-3">
                            {{ $payments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection